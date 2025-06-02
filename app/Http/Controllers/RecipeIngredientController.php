<?php

namespace App\Http\Controllers;

use App\Models\RecipeIngredient;
use App\Models\RecipeIngredientFood;
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
        $query = RecipeIngredient::withoutTrashed();
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
        $ingredientId = $request->get('ingredient_id');
        $foodIds = $request->get('food_ids');

        $this->deleteUnlinkedFoods($foodIds, $ingredientId);
        $saved = $this->upsertFoods($foodIds, $ingredientId);

        if ($saved) {
            return response()->json(['status' => 'success', 'message' => __('Linked foods saved successfully.')]);
        } else {
            return response()->json(['status' => 'error', 'message' => __('Failed to save linked foods.')]);
        }
    }

    /**
     * Delete all foods all in RecipeIngredientFoods with ingredient_id that are not in the food_ids array.
     *
     * @param [type] $foodIds
     * @param [type] $ingredientId
     * @return void
     */
    private function deleteUnlinkedFoods($foodIds, $ingredientId)
    {
        $recipeIngredientFood = RecipeIngredientFood::where('recipe_ingredient_id', $ingredientId);
        if (is_array('food_ids')) {
            $recipeIngredientFood->whereNotIn('food_id', $foodIds);
        }
        $recipeIngredientFood->delete();
    }

    /**
     * Upsert foods in RecipeIngredientFoods table.
     *
     * @param array $foodIds
     * @param int $ingredientId
     * @return \Illuminate\Database\Eloquent\Collection|bool
     */
    private function upsertFoods($foodIds, $ingredientId): Collection|bool
    {
        return !is_array($foodIds) ?: RecipeIngredientFood::upsert(
            array_map(function ($foodId) use ($ingredientId) {
                return [
                    'recipe_ingredient_id' => $ingredientId,
                    'food_id' => $foodId,
                ];
            }, $foodIds),
            ['recipe_ingredient_id', 'food_id'],
            ['recipe_ingredient_id', 'food_id']
        );
    }

    /**
     * Translate the ingredient names if the user is authenticated.
     *
     * @param \Illuminate\Database\Eloquent\Collection $data
     * @return \Illuminate\Database\Eloquent\Collection
     */
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
