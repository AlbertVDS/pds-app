<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\RecipeSync;

class RunRecipeSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-recipe-sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $recipeSync = new RecipeSync();
        $recipeSync->handle();
        $this->info('Recipes sync complete.');
    }
}
