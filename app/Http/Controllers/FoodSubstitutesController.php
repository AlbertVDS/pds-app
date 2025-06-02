<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Services\FoodSubstitutesService;

class FoodSubstitutesController extends Controller
{
    /**
     * Update the substitute for a food item.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $food = Food::findOrFail($request->input('food_id'));
        $substitute = Food::findOrFail($request->input('substitute_id'));

        if ($request->boolean('checked')) {
            FoodSubstitutesService::enableSubstitute($food, $substitute);
        } else {
            FoodSubstitutesService::disableSubstitute($food, $substitute);
        }
    }
}
