<?php

namespace App\Console\Commands;

use App\Services\RecipeApiService;
use App\Models\Recipe;
use App\Models\RecipeArea;
use App\Models\RecipeCategory;
use App\Models\RecipeIngredient;
use App\Models\RecipeTag;
use Illuminate\Console\Command;

class RecipeSync extends Command
{
    private RecipeApiService $recipeApiService;


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
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->recipeApiService = new RecipeApiService();
    }

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $alphabet = range('a', 'z');

        foreach ($alphabet as $letter) {
            $this->recipeApiService->letter($letter);
            $recipes = $this->recipeApiService->get();

            if (isset($recipes['meals'])) {
                foreach ($recipes['meals'] as $recipe) {
                    Recipe::firstOrCreate(
                        ['tmdb_id' => $recipe['idMeal']],
                        [
                            'name' => $recipe['strMeal'],
                            'category_id' => $this->storeCategory($recipe),
                            'area_id' => $this->storeArea($recipe),
                            'instructions' => $recipe['strInstructions'],
                            'thumbnail_url' => $recipe['strMealThumb'],
                            'tags' => $this->storeTags($recipe),
                            'youtube_url' => $recipe['strYoutube'],
                            'ingredients' => $this->storeIngredients($recipe),
                            'measurements' => $this->storeMeasurements($recipe),
                        ]
                    );
                }
            }
        }
    }

    /**
     * Store recipe category
     * @param mixed $recipe
     * @return int
     */
    private function storeCategory($recipe): int
    {
        $category = RecipeCategory::firstOrCreate(['name' => $recipe['strCategory']]);
        return $category->id;
    }

    /**
     * Store recipe area
     * @param mixed $recipe
     * @return int
     */
    private function storeArea($recipe): int
    {
        $area = RecipeArea::firstOrCreate(['name' => $recipe['strArea']]);
        return $area->id;
    }

    /**
     * Store recipe ingredients
     * @param array $recipe
     * @return array
     */
    private function storeIngredients(array $recipe): array
    {
        $numbers = range(1, 20);
        $ingredients = [];

        foreach ($numbers as $number) {
            $ingredient = $recipe['strIngredient' . $number];

            if ($ingredient) {
                $recipeIngredient = RecipeIngredient::firstOrCreate(['name' => $ingredient]);
                $ingredients[] = $recipeIngredient->id;
            }
        }

        return $ingredients;
    }

    /**
     * Store recipe measurements
     * @param array $recipe
     * @return array
     */
    private function storeMeasurements(array $recipe): array
    {
        $numbers = range(1, 20);
        $measurements = [];

        foreach ($numbers as $number) {
            $measurement = $recipe['strMeasure' . $number];

            if ($measurement) {
                $recipeIngredient = RecipeIngredient::firstOrCreate(['name' => $measurement]);
                $measurements[] = $recipeIngredient->id;
            }
        }

        return $measurements;
    }

    /**
     * Store recipe tags
     * @param array $recipe
     * @return array
     */
    private function storeTags(array $recipe): array
    {
        $tagsArray = [];

        if (isset($recipe['strTags'])) {
            $tags = explode(',', $recipe['strTags']);
            foreach ($tags as $tag) {
                $recipeTag = RecipeTag::firstOrCreate(['name' => $tag]);
                $tagsArray[] = $recipeTag->id;
            }
        }

        return $tagsArray;
    }
}
