<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\RecipeArea;
use App\Models\RecipeCategory;
use App\Models\RecipeIngredient;
use App\Models\RecipeTag;

class RecipeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $recipes = Recipe::query();

        $request->filled('search') ? $recipes->where('name', 'LIKE', '%' . $request->get('search') . '%') : null;
        $request->filled('recipe-ingredients') ? $recipes->whereJsonContains('ingredients', array_map('intval', $request->get('recipe-ingredients'))) : null;

        $recipeIngredients = $request->filled('recipe-ingredients') ? RecipeIngredient::whereIn('id', $request->get('recipe-ingredients'))->get() : [];
        $recipeCategories = $request->filled('recipe-categories') ? RecipeCategory::whereIn('id', $request->get('recipe-categories'))->get() : [];
        $recipeAreas = $request->filled('recipe-areas') ? RecipeArea::whereIn('id', $request->get('recipe-areas'))->get() : [];
        $recipeTags = $request->filled('recipe-tags') ? RecipeTag::whereIn('id', $request->get('recipe-tags'))->get() : [];

        return view(
            'recipes.index',
            [
                'pageTitle' => __('Recipes'),
                'recipes' => $recipes->orderBy('name')->paginate(10) ?? '',
                'search' => $request->get('search') ?? '',
                'recipeIngredients' => $recipeIngredients,
                'recipeCategories' => $recipeCategories,
                'recipeAreas' => $recipeAreas,
                'recipeTags' => $recipeTags,
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::find($id);

        return view(
            'recipes.show',
            [
                'pageTitle' => __($recipe->name ?? ''),
                'recipe' => $recipe ?? []
            ]
        );
    }
}
