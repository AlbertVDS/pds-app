<?php

namespace App\Http\Controllers;

use App\Models\RecipeIngredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeIngredientController extends Controller
{
    /**
     * Get results based on the search term.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autoComplete(Request $request)
    {
        $query = RecipeIngredient::query();
        if (Auth::user()) {
            $query->join('original_text', 'recipe_ingredients.name', '=', 'original_text.text');
            $query->join('translations', 'original_text.id', '=', 'translations.original_text_id');
            $query->where('translations.translation', 'LIKE', '%' . $request->get('q'));
            $query->where('translations.language_id', Auth::user()->language_id);
        } else {
            $query->where('name', 'LIKE', '%' . $request->get('q') . '%');
        }
        $query->orderBy('name');
        $query->take(20);
        $data = $query->get();
        $data = $this->translate($data);
        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('recipe-ingredients.index', [
            'pageTitle' => __('Ingredient list'),
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
                'message' => __('Linked foods saved successfully.'),
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => __('Failed to save linked foods.'),
            ]);
        }
    }

    private function translate($data)
    {
        if (Auth::user()) {
            foreach ($data as $item) {
                $item->name = __($item->name);
            }
        }
        return $data;
    }
}
