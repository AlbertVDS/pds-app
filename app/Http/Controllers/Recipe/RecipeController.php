<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe\Recipe;
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
                'pageTitle' => translate('Recipes'),
                'recipeSearch' => $this->recipeSearchService->searchRecipes($request),
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Recipe $recipe)
    {
        return view(
            'recipes.show',
            [
                'pageTitle' => translate($recipe->name ?? ''),
                'recipe' => $recipe ?? []
            ]
        );
    }
}
