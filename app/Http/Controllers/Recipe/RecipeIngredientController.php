<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\RecipeIngredient;
use Illuminate\Http\Request;
use App\Services\AutocompleteService;
use App\Services\LinkedFoodService;

class RecipeIngredientController extends Controller
{
    private $linkedFoodService;
    /**
     * Create a new controller instance.
     */
    public function __construct(LinkedFoodService $linkedFoodService)
    {
        $this->linkedFoodService = $linkedFoodService;
    }

    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        return (new AutocompleteService())->autocomplete(RecipeIngredient::class, $request);
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
