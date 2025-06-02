<?php

namespace App\Http\Controllers;

use App\Models\RecipeIngredient;
use Illuminate\Http\Request;
use App\Services\AutocompleteService;
use App\Services\LinkedFoodService;

class RecipeIngredientController extends Controller
{
    private $linkedFoodService;
    private $autocompleteService;

    /**
     * Create a new controller instance.
     */
    public function __construct(LinkedFoodService $linkedFoodService, AutocompleteService $autocompleteService)
    {
        $this->linkedFoodService = $linkedFoodService;
        $this->autocompleteService = $autocompleteService;
    }

    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        return $this->autocompleteService->autocomplete(RecipeIngredient::class, $request);
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
        return $this->linkedFoodService->saveLinkedFoods($request);
    }
}
