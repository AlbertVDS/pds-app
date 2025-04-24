<?php

namespace App\Http\Controllers;

use App\Models\RecipeIngredient;
use Illuminate\Http\Request;

class RecipeIngredientController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autoComplete(Request $request)
    {
        $query = RecipeIngredient::select("name", "id");

        $request->filled('q') ? $query->where('name', 'LIKE', '%' . $request->get('q') . '%') : null;
        $query->orderBy('name');
        $query->take(20);
        $data = $query->get();

        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipe-ingredients.index', [
            'pageTitle' => 'Ingredient list',
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
        $food = RecipeIngredient::find($request->get('ingredient_id'));
        $food->food_ids = $request->get('food_ids');

        if ($food->save()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Linked foods saved successfully.',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to save linked foods.',
            ]);
        }
    }
}
