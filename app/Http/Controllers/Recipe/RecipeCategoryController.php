<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
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
        return (new AutocompleteService())->autocomplete(RecipeCategory::class, $request);
    }
}
