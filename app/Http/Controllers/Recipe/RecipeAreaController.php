<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RecipeArea;
use App\Services\AutocompleteService;

class RecipeAreaController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        return (new AutocompleteService())->autocomplete(RecipeArea::class, $request);
    }
}
