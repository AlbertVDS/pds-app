<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\FoodResource;
use App\Http\Resources\FoodResourceCollection;
use App\Models\Food\Food;
use App\Http\Resources\RecipeResource;
use App\Http\Resources\RecipeResourceCollection;
use App\Models\Recipe\Recipe;

Route::get('/food', function () {
    return FoodResourceCollection::collection(Food::paginate(30));
});
Route::get('/food/{id}', function (string $id) {
    return new FoodResource(Food::findOrFail($id));
});

Route::get('/recipe', function () {
    return RecipeResourceCollection::collection(Recipe::paginate(30));
});
Route::get('/recipe/{id}', function (string $id) {
    return new RecipeResource(Recipe::findOrFail($id));
});
