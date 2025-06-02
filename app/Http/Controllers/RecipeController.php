<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Services\RecipeSearchService;


class RecipeController extends Controller
{
    private $recipeSearchService;

    /**
     * Create a new controller instance.
     */
    public function __construct(RecipeSearchService $recipeSearchService)
    {
        $this->recipeSearchService = $recipeSearchService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view(
            'recipes.index',
            [
                'pageTitle' => __('Recipes'),
                'recipeSearch' => $this->recipeSearchService->searchRecipes($request),
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
