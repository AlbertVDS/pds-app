<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Language;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Models\OriginalText;
use App\Models\Translation;
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
    protected $description = 'Command description';

    /**
     * Array of untranslated texts
     */
    protected $untranslated = [];

    /**
     * Chunked array of untranslated texts
     */
    protected $untranslatedChunked = [];

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

        $translatedIds = Translation::where('language_id', $language->id)->pluck('original_text_id')->all();
        $this->untranslated = OriginalText::with('foreign')->whereNotIn('id', $translatedIds)
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
            if ($totalCharacters > 2500) {
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
        $prompt = 'Provide the following information as list: Translate the following list to ' . $language->code . ' repsond with json and no text formatting. keep the keys the same, don\t add new ones.';

        foreach ($this->untranslatedChunked as $chunk) {
            $chunkText = json_encode($chunk);

            $response = Gemini::generativeModel('gemini-2.0-flash')->generateContent($prompt . $chunkText);
            $responseArray = json_decode(str_replace(['json', '```'], '', $response->text()));

            $this->saveTranslated($responseArray, $language);
            sleep(10);
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
        foreach ($responseArray as $item) {
            if (!isset($item->id) || !isset($item->text)) {
                $this->error('Error: ' . print_r($responseArray, true));
                return;
            }
            Translation::firstOrCreate([
                'language_id' => $language->id,
                'original_text_id' => $item->id,
                'translation' => $item->text,
            ]);
        }
    }
}
