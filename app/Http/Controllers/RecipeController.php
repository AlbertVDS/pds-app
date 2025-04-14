<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RecipeApiService;

class RecipeController extends Controller
{
    private RecipeApiService $recipeApiService;

    public function __construct(RecipeApiService $recipeApiService)
    {
        $this->recipeApiService = $recipeApiService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->get('recipe-ingredients')) {
            $recipes = $this->recipeApiService->getByIngredients($request->get('recipe-ingredients'));
        } else {
            $request->get('search') ? $this->recipeApiService->search($request->get('search')) : $this->recipeApiService->letter('a');
            $recipes = $this->recipeApiService->get();
        }

        return view(
            'recipes.index',
            [
                'pageTitle' => 'Recipes',
                'recipes' => $recipes['meals'] ?? [],
                'search' => $request->get('search') ?? '',
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = $this->recipeApiService->getById($id);

        return view(
            'recipes.show',
            [
                'pageTitle' => $recipe['meals'][0]['strMeal'] ?? 'Recipe',
                'recipe' => $recipe['meals'][0] ?? []
            ]
        );
    }
}
