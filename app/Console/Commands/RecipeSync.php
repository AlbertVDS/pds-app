<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use App\Services\RecipeSyncService;

class RecipeSync extends Command
{
    private $recipeApiService;


    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:recipe-sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync recipes from the API';

    /**
     * Create a new command instance.
     */
    public function __construct(RecipeSyncService $recipeApiService)
    {
        parent::__construct();
        $this->recipeApiService = $recipeApiService;
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->recipeApiService->syncRecipes();

        $this->info('Recipes have been successfully synced.');
    }
}
