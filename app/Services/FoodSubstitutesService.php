<?php

namespace App\Services;

use App\Models\FoodSubstitute;

class FoodSubstitutesService
{
    /**
     * Enable a substitute for a food item.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function enableSubstitute($food, $substitute): \Illuminate\Http\JsonResponse
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
    public function disableSubstitute($food, $substitute): \Illuminate\Http\JsonResponse
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
