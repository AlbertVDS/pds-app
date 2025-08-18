<?php

namespace App\Services;


use App\Models\Recipe\Recipe;
use App\Models\Recipe\RecipeArea;
use App\Models\Recipe\RecipeCategory;
use App\Models\Recipe\RecipeIngredient;
use App\Models\Recipe\RecipeInstruction;
use App\Models\Recipe\RecipeMeasurement;
use App\Models\Recipe\RecipeTag;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use stdClass;
use App\Services\RecipeApiService;

class RecipeSyncService
{

    private $recipeApiService;

    /**
     * Recipe attributes
     */
    private $recipeAttributes;

    /**
     * Store attributes
     */
    private $storedAttributes;

    /**
     * Prepared attributes
     */
    private $recipePrepared;

    /**
     * Prepared attributes
     */
    private $recipeInstructions;

    /**
     * Prepared attributes
     */
    private $recipeTags;

    /**
     * Prepared attributes
     */
    private $recipeIngredientMeasurements;



    /**
     * Create a new command instance.
     */
    public function __construct(RecipeApiService $recipeApiService)
    {
        $this->recipeApiService = $recipeApiService;
    }

    /**
     * Execute the console command.
     * @return 
     */
    public function syncRecipes(): void
    {
        $alphabet = range('a', 'z');

        foreach ($alphabet as $letter) {
            $this->recipeApiService->letter($letter);
            $recipes = $this->recipeApiService->get();
            $this->recipeAttributes = $this->createDefaultAttributes();
            $this->storeRecipes($recipes);
        }
    }

    /**
     * Store recipes
     */
    private function storeRecipes($recipes): void
    {
        if (isset($recipes['meals'])) {
            $this->prepareAttributes($recipes);
            $this->storedAttributes = $this->storeAttributes();
            $this->recipePrepared = [];
            $this->recipeInstructions = [];
            $this->recipeTags = [];
            $this->recipeIngredientMeasurements = [];

            foreach ($recipes['meals'] as $recipe) {
                $this->recipePrepair($recipe);
                $this->instructionsPrepair($recipe);
                $this->tagsPrepair($recipe);
                $this->igredientMeasurementPrepair($recipe);
            }

            $this->storeRecipesInDatabase();
        }
    }

    /**
     * Create default attributes
     */
    private function createDefaultAttributes(): stdClass
    {
        return (object) [
            'categories' => [],
            'areas' => [],
            'tags' => [],
            'ingredients' => [],
            'measurements' => [],
        ];
    }

    /**
     * Prepare recipe data
     */
    private function recipePrepair(array $recipe)
    {
        $this->recipePrepared[] = [
            'tmdb_id' => $recipe['idMeal'],
            'name' => $recipe['strMeal'],
            'category_id' => $this->storedAttributes->categories->firstWhere('name', $recipe['strCategory'])->id,
            'area_id' => $this->storedAttributes->areas->firstWhere('name', $recipe['strArea'])->id,
            'thumbnail_url' => $recipe['strMealThumb'],
            'youtube_url' => $recipe['strYoutube']
        ];
    }

    /**
     * Prepare recipe instructions
     */
    private function instructionsPrepair(array $recipe)
    {
        $this->recipeInstructions[] = [
            'tmdb_id' => $recipe['idMeal'],
            'instruction' => $recipe['strInstructions']
        ];
    }

    /**
     * Prepare recipe tags
     */
    private function tagsPrepair(array $recipe)
    {
        $tags = $recipe['strTags'] ? $this->getTagIds($recipe['strTags']) : null;
        if ($tags) {
            foreach ($tags as $tag) {
                $this->recipeTags[] = [
                    'tmdb_id' => $recipe['idMeal'],
                    'tag_id' => $tag
                ];
            }
        }
    }

    /**
     * Prepare ingredient measurements
     */
    private function igredientMeasurementPrepair(array $recipe)
    {
        foreach ($this->getIgredientMeasurementIds($recipe) as $ingredientId => $measurementId) {
            $this->recipeIngredientMeasurements[] = [
                'tmdb_id' => $recipe['idMeal'],
                'ingredient_id' => $ingredientId,
                'measurement_id' => $measurementId
            ];
        }
    }

    /**
     * Prepare attributes from recipes
     */
    private function prepareAttributes(array $recipes): void
    {
        foreach ($recipes['meals'] as $recipe) {
            $this->recipeAttributes->categories = $this->addItem($recipe['strCategory'], $this->recipeAttributes->categories);
            $this->recipeAttributes->areas = $this->addItem($recipe['strArea'], $this->recipeAttributes->areas);
            $this->recipeAttributes->tags = $this->addItem($recipe['strTags'], $this->recipeAttributes->tags);
            $this->recipeAttributes->ingredients = $this->getItems($recipes['meals'], 'Ingredient', $this->recipeAttributes->ingredients, true);
            $this->recipeAttributes->measurements = $this->getItems($recipes['meals'], 'Measure', $this->recipeAttributes->measurements, true);
        }
    }

    /**
     * Add items to the array
     * @param mixed $itemName
     * @param mixed $itemArray
     */
    private function addItem($itemName, $itemArray)
    {
        $items = is_string($itemName) ? explode(',', $itemName) : [$itemName];
        foreach ($items as $item) {
            if (!in_array($item, $itemArray) && !empty($item)) {
                $itemArray[] = $item;
            }
        }
        return $itemArray;
    }


    /**
     * Get item from the recipe array
     * @param array $recipes
     * @return array
     */
    private function getItems(array $recipes, $itemName, $itemArray = [], $unique = false): array
    {
        $items = [];
        foreach ($recipes as $recipe) {
            foreach (range(1, 20) as $number) {
                $item = $recipe['str' . $itemName . $number];
                if ($item && $item !== ' ') {
                    $items[] = strtolower(rtrim($item));
                }
            }
        }
        if ($unique) {
            $items = array_merge($itemArray, $items);
        }
        return $items;
    }

    /**
     * Get ingredient measurement IDs
     *
     * @param [type] $recipe
     * @return array
     */
    private function getIgredientMeasurementIds($recipe)
    {
        $ingredients = $this->getItems([$recipe], 'Ingredient');
        $measurements = $this->getItems([$recipe], 'Measure');

        return Arr::mapWithKeys($ingredients, function ($ingredient, $key) use ($measurements) {
            $ingredientId = $this->storedAttributes->ingredients->firstWhere('name', $ingredient)->id;
            $measurementId = isset($measurements[$key]) ? $this->storedAttributes->measurements->firstWhere('name', $measurements[$key])->id : null;
            return [$ingredientId => $measurementId];
        });
    }

    /**
     * Get tag IDs
     *
     * @param mixed $tags
     * @return array
     */
    private function getTagIds($tags)
    {
        $tagIds = [];
        foreach (explode(',', rtrim($tags, ',')) as $tag) {
            $tagIds[] = $this->storedAttributes->tags->firstWhere('name', $tag)->id;
        }
        return $tagIds;
    }

    /**
     * Store attributes and return an object
     *
     * @return object
     */
    private function storeAttributes()
    {
        return (object) [
            'categories' => $this->storeItems($this->recipeAttributes->categories, 'RecipeCategory'),
            'areas' => $this->storeItems($this->recipeAttributes->areas, 'RecipeArea'),
            'tags' => $this->storeItems($this->recipeAttributes->tags, 'RecipeTag'),
            'ingredients' => $this->storeItems($this->recipeAttributes->ingredients, 'RecipeIngredient'),
            'measurements' => $this->storeItems($this->recipeAttributes->measurements, 'RecipeMeasurement'),
        ];
    }

    /**
     * Store items in the database
     * 
     * @param mixed $items
     * @param mixed $model
     */
    private function storeItems($items, $model)
    {
        $modelClass = "App\\Models\\Recipe\\" . $model;
        $modelClass::upsert(array_map(function ($item) {
            return ['name' => $item];
        }, array_unique($items)), ['id'], ['name']);

        return $modelClass::all();
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
    private function storeAreas($recipe): int
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

            if (!empty($ingredient) && $ingredient !== ' ') {
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

            if (!empty($measurement) && $measurement !== ' ') {
                $recipeIngredient = RecipeMeasurement::firstOrCreate(['name' => $measurement]);
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

    /**
     * Store recipes in the database
     */
    private function storeRecipesInDatabase(): void
    {
        Recipe::upsert($this->recipePrepared, ['tmdb_id'], [
            'name',
            'category_id',
            'area_id',
            'thumbnail_url',
            'youtube_url'
        ]);

        RecipeInstruction::upsert($this->recipeInstructions, ['tmdb_id'], [
            'tmdb_id',
            'instruction'
        ]);

        DB::table('recipe_tag_pivot')->upsert($this->recipeTags, ['tmdb_id', 'tag_id'], [
            'tmdb_id',
            'tag_id'
        ]);

        DB::table('recipe_ingredient_measurements')->upsert($this->recipeIngredientMeasurements, ['tmdb_id', 'ingredient_id', 'measurement_id'], [
            'tmdb_id',
            'ingredient_id',
            'measurement_id'
        ]);
    }
}
