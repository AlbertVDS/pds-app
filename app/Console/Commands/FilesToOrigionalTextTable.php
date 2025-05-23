<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use App\Models\OriginalText;
use App\Models\ControllerText;

class FilesToOrigionalTextTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'original-text:from-files';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Array of file locations and corisponding model names.
     *
     * @var array
     */
    protected $fileLocations;

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

    public function __construct()
    {
        parent::__construct();

        $this->fileLocations = [
            'App\Models\ControllerText' => app_path('Http/Controllers'),
            'App\Models\ViewText' => resource_path('views'),
        ];
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach ($this->fileLocations as $class => $path) {
            $this->proccesFiles($class, $path);
        }
    }

    /**
     * Proccess in specific directory and save them through model
     * @return void
     */
    private function proccesFiles($class, $path)
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
