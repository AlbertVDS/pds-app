<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeTag;
use App\Services\AutocompleteService;

class RecipeTagController extends Controller
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
        return $this->autocompleteService->autocomplete(RecipeTag::class, $request);
    }
}
