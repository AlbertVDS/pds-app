<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Services\RecipeSearchService;


class RecipeController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $recipeSearchService = new RecipeSearchService();

        return view(
            'recipes.index',
            [
                'pageTitle' => __('Recipes'),
                'recipeSearch' => $recipeSearchService->searchRecipes($request),
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
