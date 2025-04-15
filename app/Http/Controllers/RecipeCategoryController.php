<?php

namespace App\Http\Controllers;

use App\Models\RecipeCategory;
use Illuminate\Http\Request;

class RecipeCategoryController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autoComplete(Request $request)
    {
        $query = RecipeCategory::select("name", "id");

        $request->filled('q') ? $query->where('name', 'LIKE', '%' . $request->get('q') . '%') : null;
        $query->orderBy('name');
        $query->take(20);
        $data = $query->get();

        return response()->json($data);
    }
}
