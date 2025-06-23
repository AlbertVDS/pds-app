<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\ControllerText;
use App\Models\OriginalText;

class FilesToOriginalTextService
{
    /**
     * Current class
     * @var
     */
    protected $class;

    /**
     * Current path
     * @var
     */
    protected $path;

    /**
     * Regex to find text inside laravel translate function.
     *
     * @var string
     */
    protected $regex = "/__\('([^'$]*?)'\)/";


    /**
     * Array of file locations and corisponding model names.
     *
     * @var array
     */
    protected $fileLocations;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->fileLocations = [
            'App\Models\ControllerText' => app_path('Http/Controllers'),
            'App\Models\ViewText' => resource_path('views'),
        ];
    }

    /**
     * Proccess all files in the specified locations and save them through model
     * @return void
     */
    public function procces()
    {
        foreach ($this->fileLocations as $class => $path) {
            $this->proccesFiles($class, $path);
        }
    }

    /**
     * Proccess in specific directory and save them through model
     * @return void
     */
    public function proccesFiles($class, $path)
    {
        $this->class = $class;
        $this->path = $path;
        $files = File::allFiles($path);

        foreach ($files as $file) {
            $filePath = $file->getPathname();
            $content = File::get($filePath);
            $translateables = Str::of($content)->matchAll($this->regex);

            $this->saveTranslatables($translateables);
        }
    }

    /**
     * Save the translatable strings to the database.
     *
     * @param  \Illuminate\Support\Collection  $translateables
     * @return void
     */
    public function saveTranslatables($translateables)
    {
        foreach ($translateables as $translateable) {
            $text = Str::of($translateable)->replaceMatches($this->regex, '$1')->toString();

            $controller = $this->class::firstOrCreate([
                'text' => $text,
            ]);

            OriginalText::firstOrCreate([
                'foreign_id' => $controller->id,
                'foreign_type' => $this->class,
            ]);
        }
    }
}
