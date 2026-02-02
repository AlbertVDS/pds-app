<?php

namespace App\Services;

use App\Models\Food\Food;
use App\Models\Food\FoodSubstitute;

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
        $query = Food::where('type_id', $food->type_id)->where('id', '!=', $food->id);

        // Filter out foods with FODMAPs that the current food has
        if ($food->fructose) {
            $query->where('fructose', '=', 0);
        }
        if ($food->lactose) {
            $query->where('lactose', '=', 0);
        }
        if ($food->mannitol) {
            $query->where('mannitol', '=', 0);
        }
        if ($food->sorbitol) {
            $query->where('sorbitol', '=', 0);
        }
        if ($food->GOS) {
            $query->where('GOS', '=', 0);
        }
        if ($food->fructan) {
            $query->where('fructan', '=', 0);
        }

        $result = $query->orderBy('name')->get();
        return $result->chunk(ceil(count($result) / 3));
    }

    /**
     * Toggle the substitute for a food item.
     *
     * @param bool $checked
     * @param Food $food
     * @param Food $substitute
     * @return void
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
     *
     * @param Food $food
     * @param Food $substitute
     * @return void
     */
    private function enableSubstitute(Food $food, Food $substitute): void
    {
        FoodSubstitute::withTrashed()->updateOrCreate(
            ['food_id' => $food->id, 'substitute_id' => $substitute->id],
            ['food_id' => $food->id, 'substitute_id' => $substitute->id, 'deleted_at' => null]
        );
    }

    /**
     * Disable a substitute for a food item.
     *
     * @param Food $food
     * @param Food $substitute
     * @return void
     */
    private function disableSubstitute(Food $food, Food $substitute): void
    {
        FoodSubstitute::where('food_id', $food->id)
            ->where('substitute_id', $substitute->id)
            ->delete();
    }
}
