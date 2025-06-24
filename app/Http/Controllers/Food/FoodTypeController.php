<?php

namespace App\Http\Controllers\Food;

use App\Http\Controllers\Controller;
use App\Models\Food\FoodType;
use App\Services\AutocompleteService;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    public function autocomplete(Request $request)
    {
        return (new AutocompleteService())->autocomplete(FoodType::class, $request);
    }
}
