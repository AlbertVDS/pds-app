<?php

use Illuminate\Support\Facades\Route;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodResourceCollection;
use App\Models\Food\Food;
use App\Http\Resources\RecipeResource;
use App\Http\Resources\RecipeResourceCollection;
use App\Models\Recipe\Recipe;
use App\Http\Controllers\Api\FoodController;
use App\Http\Controllers\Api\RecipeController;

// Route::middleware('auth:sanctum')->group(function () {
Route::resource('foods', FoodController::class)->only(['index', 'show']);
Route::resource('recipes', RecipeController::class)->only(['index', 'show']);
// });
