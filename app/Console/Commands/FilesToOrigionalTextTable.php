<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\FilesToOriginalTextService;

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
    protected $description = 'Copy translatable strings from files to the original_text table';

    /**
     * filesToOriginalTextService
     * @var 
     */
    private $filesToOriginalTextService;


    public function __construct(FilesToOriginalTextService $filesToOriginalTextService)
    {
        parent::__construct();

        $this->filesToOriginalTextService = $filesToOriginalTextService;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting to copy translatable strings from files to the original_text table...');
        $this->filesToOriginalTextService->procces();
        $this->info('Translatable strings copied successfully to the original_text table.');
    }
}
