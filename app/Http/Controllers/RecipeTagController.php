<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeTag;
use App\Services\AutocompleteService;

class RecipeTagController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        return AutocompleteService::autocomplete(RecipeTag::class, $request);
    }
}
