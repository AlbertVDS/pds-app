<?php

namespace App\Services;

use App\Models\Food;

class FoodSubstituteService
{
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

        $result =  $sameTypeFoods->orderBy('name')->get();
        return $result->chunk(ceil(count($result) / 3));
    }
}
