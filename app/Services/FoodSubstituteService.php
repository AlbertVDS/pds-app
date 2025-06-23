<?php

namespace App\Services;

use App\Models\Food;
use App\Models\FoodSubstitute;

class FoodSubstituteService
{
    /**
     * Get substitutes for a given food item.
     *
     * @param Food $food
     * @return \Illuminate\Support\Collection
     */
    public function getSubstitutes(Food $food)
    {
        $sameTypeFoods = Food::where('type_id', $food->type_id);
        $sameTypeFoods->where('id', '!=', $food->id);

        $food->fructose ? $sameTypeFoods->where('fructose', '=', 0) : null;
        $food->lactose ? $sameTypeFoods->where('lactose', '=', 0) : null;
        $food->mannitol ? $sameTypeFoods->where('mannitol', '=', 0) : null;
        $food->sorbitol ? $sameTypeFoods->where('sorbitol', '=', 0) : null;
        $food->GOS ? $sameTypeFoods->where('GOS', '=', 0) : null;
        $food->fructan ? $sameTypeFoods->where('fructan', '=', 0) : null;

        $result = $sameTypeFoods->orderBy('name')->get();
        return $result->chunk(ceil(count($result) / 3));
    }

    /**
     * Toggle the substitute for a food item.
     *
     * @param bool $checked
     * @param Food $food
     * @param Food $substitute
     */
    public function toggleSubstitute(bool $checked, Food $food, Food $substitute): void
    {
        if ($checked) {
            $this->enableSubstitute($food, $substitute);
        } else {
            $this->disableSubstitute($food, $substitute);
        }
    }

    /** 
     * Enable a substitute for a food item.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    private function enableSubstitute($food, $substitute): \Illuminate\Http\JsonResponse
    {
        FoodSubstitute::withTrashed()->updateOrCreate(
            ['food_id' => $food->id, 'substitute_id' => $substitute->id],
            ['food_id' => $food->id, 'substitute_id' => $substitute->id, 'deleted_at' => null]
        );

        return response()->json([
            'success' => true,
            'message' => __('Substitute added successfully.'),
        ]);
    }

    /**
     * Disable a substitute for a food item.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    private function disableSubstitute($food, $substitute): \Illuminate\Http\JsonResponse
    {
        FoodSubstitute::where('food_id', $food->id)
            ->where('substitute_id', $substitute->id)
            ->delete();
        return response()->json([
            'success' => true,
            'message' => __('Substitute removed successfully.'),
        ]);
    }
}
