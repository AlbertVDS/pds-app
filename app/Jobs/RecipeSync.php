<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;


class RecipeSync implements ShouldQueue
{
    use Queueable;

    private RecipeApiService $recipeApiService;


    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        $this->recipeApiService = new RecipeApiService();
    }

    /**
     * Execute the job.
     */
}
