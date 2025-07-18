<?php

namespace App\Console\Commands;

use App\Services\GenerateLanguageFilesService;
use Illuminate\Console\Command;

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
     * GenerateLanguageFilesService instance.
     */
    protected $generateLanguageFilesService;

    /**
     * Create a new command instance.
     */
    public function __construct(GenerateLanguageFilesService $generateLanguageFilesService)
    {
        parent::__construct();
        $this->generateLanguageFilesService = $generateLanguageFilesService;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Start generating language files...');
        $generated = $this->generateLanguageFilesService->generate();
        $this->info("Done generating language files$generated.");
    }
}
