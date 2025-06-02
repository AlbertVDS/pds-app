<?php

namespace App\Http\Controllers;

use App\Models\RecipeCategory;
use Illuminate\Http\Request;
use App\Services\AutocompleteService;

class RecipeCategoryController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        return AutocompleteService::autocomplete(RecipeCategory::class, $request);
    }
}
