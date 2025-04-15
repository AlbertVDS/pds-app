<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeArea;

class RecipeAreaController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autoComplete(Request $request)
    {
        $query = RecipeArea::select("name", "id");

        $request->filled('q') ? $query->where('name', 'LIKE', '%' . $request->get('q') . '%') : null;
        $query->orderBy('name');
        $query->take(20);
        $data = $query->get();

        return response()->json($data);
    }
}
