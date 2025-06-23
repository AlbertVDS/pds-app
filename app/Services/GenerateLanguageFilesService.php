<?php

namespace App\Services;

use App\Models\Language;
use App\Models\Translation;

class GenerateLanguageFilesService
{
    /**
     * string of generate languages to files
     * @var 
     */
    protected $generateLanguages;


    public function generate()
    {
        $hasTranslations = Translation::select('language_id')->distinct()->get()->toArray();
        $needGenerating = Language::whereIn('id', $hasTranslations)->get();

        foreach ($needGenerating as $language) {
            $data = $this->createArray($language);
            $this->createFile($data, $language->code);

            $this->generateLanguages .= " {$language->name} ({$language->code})";
        }

        return $this->generateLanguages;
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
