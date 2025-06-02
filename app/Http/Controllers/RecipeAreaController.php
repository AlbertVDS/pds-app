<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeArea;
use App\Services\AutocompleteService;

class RecipeAreaController extends Controller
{
    private $autocompleteService;

    /**
     * Create a new controller instance.
     */
    public function __construct(AutocompleteService $autocompleteService)
    {
        $this->autocompleteService = $autocompleteService;
    }

    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        return $this->autocompleteService->autocomplete(RecipeArea::class, $request);
    }
}
