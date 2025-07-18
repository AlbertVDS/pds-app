<?php

namespace App\Http\Controllers\Food;

use App\Http\Controllers\Controller;
use App\Models\Food\Food;
use Illuminate\Http\Request;
use App\Services\FoodSubstituteService;

class FoodSubstitutesController extends Controller
{
    private $foodSubstitutesService;

    /**
     * Create a new controller instance.
     *
     * @param FoodSubstituteService $foodSubstitutesService
     */
    public function __construct(FoodSubstituteService $foodSubstitutesService)
    {
        $this->foodSubstitutesService = $foodSubstitutesService;
    }

    /**
     * Update the substitute for a food item.
     * @param \Illuminate\Http\Request $request
     */
    public function update(Request $request)
    {
        $request->validate([
            'food_id' => ['required', 'integer', 'exists:foods,id'],
            'substitute_id' => ['required', 'integer', 'exists:foods,id'],
        ]);

        $food = Food::find($request->input('food_id'));
        $substitute = Food::find($request->input('substitute_id'));

        $this->foodSubstitutesService->toggleSubstitute($request->boolean('checked'), $food, $substitute);
    }
}
