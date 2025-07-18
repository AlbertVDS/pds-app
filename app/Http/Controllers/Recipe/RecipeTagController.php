<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe\RecipeTag;
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
        return (new AutocompleteService())->autocomplete(RecipeTag::class, $request);
    }
}
