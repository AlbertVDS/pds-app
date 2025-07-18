<?php

namespace App\Services;

use App\Models\Recipe\Recipe;
use App\Models\Recipe\RecipeIngredient;
use App\Models\Recipe\RecipeCategory;
use App\Models\Recipe\RecipeArea;
use App\Models\Recipe\RecipeTag;
use Illuminate\Http\Request;

class RecipeSearchService
{
    public $search;
    public $recipes;
    public $recipeIngredients;
    public $recipeCategories;
    public $recipeAreas;
    public $recipeTags;

    /**
     * Get results based on the search term.
     *
     * @param string $searchTerm
     * @return object
     */
    public function searchRecipes(Request $request): object
    {
        $recipes = Recipe::query();

        $request->filled('search') ? $recipes->where('name', 'LIKE', '%' . $request->get('search') . '%') : null;
        $request->filled('recipe-ingredients') ? $recipes->with('ingredientMeasurements')->whereHas('ingredientMeasurements', function ($query) use ($request) {
            $query->whereIn('ingredient_id', $request->get('recipe-ingredients'));
        }) : null;
        //->whereHas()->whereIn('recipe_ingredient_measurements.ingredient_id', $request->get('recipe-ingredients')) : null;
        $this->getSelectedOptions($request);

        $this->recipes = $recipes->orderBy('name')->paginate(10) ?? '';

        return $this;
    }

    /**
     * Get selected options
     * @param mixed $request
     * @return void
     */
    private function getSelectedOptions($request)
    {
        $this->recipeIngredients = $request->filled('recipe-ingredients') ? RecipeIngredient::whereIn('id', $request->get('recipe-ingredients'))->get() : [];
        $this->recipeCategories = $request->filled('recipe-categories') ? RecipeCategory::whereIn('id', $request->get('recipe-categories'))->get() : [];
        $this->recipeAreas = $request->filled('recipe-areas') ? RecipeArea::whereIn('id', $request->get('recipe-areas'))->get() : [];
        $this->recipeTags = $request->filled('recipe-tags') ? RecipeTag::whereIn('id', $request->get('recipe-tags'))->get() : [];
    }
}
