<?php

namespace App\Http\Controllers;

use App\Models\RecipeIngredient;
use Illuminate\Http\Request;
use App\Services\AutocompleteService;
use App\Services\LinkedFoodService;

class RecipeIngredientController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        return AutocompleteService::autocomplete(RecipeIngredient::class, $request);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipe-ingredients.index', [
            'pageTitle' => __('Ingredient list'),
            'ingredients' => RecipeIngredient::orderBy('name')->paginate(40),
        ]);
    }

    /**
     * Save linked foods
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function saveLinkedFoods(Request $request)
    {
        $linkedFoodService = new LinkedFoodService();
        return $linkedFoodService->saveLinkedFoods($request);
    }
}
