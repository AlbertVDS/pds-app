<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\FoodSubstitute;
use Illuminate\Http\Request;

class FoodSubstitutesController extends Controller
{
    /**
     * Update the substitute for a food item.
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateSubstitute(Request $request)
    {
        $food = Food::findOrFail($request->input('food_id'));
        $substitute = Food::findOrFail($request->input('substitute_id'));

        if ($request->boolean('checked')) {

            FoodSubstitute::updateOrCreate(
                ['food_id' => $food->id, 'substitute_id' => $substitute->id],
                ['food_id' => $food->id, 'substitute_id' => $substitute->id]
            );

            return response()->json([
                'success' => true,
                'message' => 'Substitute added successfully.',
            ]);
        } else {
            FoodSubstitute::where('food_id', $food->id)
                ->where('substitute_id', $substitute->id)
                ->delete();
            return response()->json([
                'success' => true,
                'message' => 'Substitute removed successfully.',
            ]);
        }
    }
}
