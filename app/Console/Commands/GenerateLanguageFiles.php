<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Language;
use App\Models\Translation;

class GenerateLanguageFiles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'language:generate-files';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate language files from the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hasTranslations = Translation::select('language_id')->distinct()->get()->toArray();
        $needGenerating = Language::whereIn('id', $hasTranslations)->get();

        $this->info('start generating language files...');
        foreach ($needGenerating as $language) {
            $data = $this->createArray($language);
            $this->createFile($data, $language->code);

            $this->info("Language file for {$language->name} ({$language->code}) generated successfully.");
        }
    }

    /**
     * Create an array of translations from the language model.
     * @param mixed $language
     * @return array
     */
    private function createArray($language)
    {
        $data = [];
        foreach ($language->translations as $translation) {
            $data[$translation->original->related_value] = $translation->translation;
        }

        return $data;
    }

    /**
     * Save language file
     * @param mixed $data
     * @param mixed $langCode
     * @return void
     */
    private function createFile($data, $langCode)
    {
        $file = lang_path("{$langCode}.json");
        if (file_exists($file)) {
            unlink($file);
        }

        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}
