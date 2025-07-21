<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Language\Language;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Models\Language\OriginalText;
use App\Models\Language\Translation;
use Gemini\Laravel\Facades\Gemini;

class TranslateToLanguage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'translate:api {language}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Translate texts to a specified language using Gemini API';

    /**
     * Array of untranslated texts
     */
    protected $untranslated = [];

    /**
     * Chunked array of untranslated texts
     */
    protected $untranslatedChunked = [];

    /**
     * Gemini model name
     */
    protected $modelName;

    /**
     * Sleep time between API calls
     */
    protected $sleepTime;

    /**
     * Translation prompt for Gemini
     */
    protected $translationPrompt;

    /**
     * Chunk length
     */
    protected $chunkLength;

    public function __construct()
    {
        parent::__construct();
        $this->chunkLength = env('CHUNK_STRING_LENGTH');
        $this->modelName = env('GEMINI_MODEL_NAME');
        $this->sleepTime = env('GEMINI_API_SLEEP');
        $this->translationPrompt = env('GEMINI_TRANSLATION_PROMPT');
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $language = Language::where('code', $this->argument('language'))->first();

        if (!$language) {
            $this->error('Language not found');
            return;
        }

        $this->getUntranslated($language);
        $this->chunkByStringSize();
        $this->translateWithGemini($language);
        $this->info('Translation completed.');
    }

    /**
     * Get all untranslated texts for the given language
     * @param mixed $language
     * @return void
     */
    private function getUntranslated($language): void
    {
        $this->info('Getting untranslated texts...');

        $this->untranslated = OriginalText::with('foreign')
            ->whereDoesntHave('translations', function ($query) use ($language) {
                $query->where('language_id', $language->id);
            })
            ->get();
    }

    /**
     * Chunk the untranslated texts by string size
     * @return void
     */
    private function chunkByStringSize(): void
    {
        $totalCharacters = 0;
        $chunk = 0;

        foreach ($this->untranslated as $item) {
            $totalCharacters += strlen($item->related_value);
            if ($totalCharacters > $this->chunkLength) {
                $chunk++;
                $totalCharacters = 0;
            }

            $this->untranslatedChunked[$chunk][] = [
                'id' => $item->id,
                'text' => $item->related_value,
            ];
        }
    }

    /**
     * Translate the untranslated texts using Gemini
     * @param mixed $language
     * @return void
     */
    private function translateWithGemini($language): void
    {
        $prompt = str_replace('#country_code#', $language->code, $this->translationPrompt);

        foreach ($this->untranslatedChunked as $chunk) {
            $chunkText = json_encode($chunk);

            $response = Gemini::generativeModel($this->modelName)->generateContent($prompt . $chunkText);
            $responseArray = json_decode(str_replace(['json', '```'], '', $response->text()));

            $this->saveTranslated($responseArray, $language);
            sleep($this->sleepTime);
        }
    }

    /**
     * Save translated texts
     * @param mixed $responseArray
     * @param mixed $language
     * @return void
     */
    private function saveTranslated($responseArray, $language): void
    {
        try {
            $responseCollection = collect($responseArray)->map(function ($item) use ($language) {
                return [
                    'language_id' => $language->id,
                    'original_text_id' => $item->id,
                    'translation' => $item->text,
                ];
            });

            Translation::insert($responseCollection->toArray());
        } catch (\Exception $e) {
            $this->error('Error: ' . print_r($responseArray, true));
            return;
        }

        // foreach ($responseArray as $item) {
        //     if (!isset($item->id) || !isset($item->text)) {
        //         $this->error('Error: ' . print_r($responseArray, true));
        //         return;
        //     }
        //     Translation::create([
        //         'language_id' => $language->id,
        //         'original_text_id' => $item->id,
        //         'translation' => $item->text,
        //     ]);
        // }
    }
}
