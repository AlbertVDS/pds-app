<?php

namespace App\Services;

use App\Models\Recipe\Recipe;
use App\Models\Recipe\RecipeIngredientFood;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class LinkedFoodService
{
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
            return response()->json(['status' => 'success', 'message' => translate('Linked foods saved successfully.')]);
        } else {
            return response()->json(['status' => 'error', 'message' => translate('Failed to save linked foods.')]);
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
        if (is_array($foodIds)) {
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
        return !filled($foodIds) ?: RecipeIngredientFood::upsert(
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
}
