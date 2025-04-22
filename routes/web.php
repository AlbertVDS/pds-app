<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodSubstitutesController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\MailDataController;
use App\Http\Controllers\RecipeAreaController;
use App\Http\Controllers\RecipeCategoryController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RecipeTagController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RecipeIngredientController;
use App\Http\Controllers\UserController;
use App\Models\RecipeIngredient;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'homepage',
    ]);
});

Route::get('area-autocomplete', action: [RecipeAreaController::class, 'autocomplete'])->name('area-autocomplete');
Route::get('category-autocomplete', action: [RecipeCategoryController::class, 'autocomplete'])->name('category-autocomplete');
Route::get('food-autocomplete', action: [FoodController::class, 'autocomplete'])->name('food-autocomplete');
Route::get('ingredient-autocomplete', action: [RecipeIngredientController::class, 'autocomplete'])->name('ingredient-autocomplete');
Route::get('tag-autocomplete', action: [RecipeTagController::class, 'autocomplete'])->name('tag-autocomplete');
Route::resource('foods', FoodController::class);
Route::post('save-linked-foods', [RecipeIngredientController::class, 'saveLinkedFoods'])->name('save-linked-foods');
Route::post('save-substitute', [FoodSubstitutesController::class, 'updateSubstitute'])->name('save-substitute');
Route::resource('mailings', MailingController::class);
Route::match(['get', 'post'], 'recipes', [RecipeController::class, 'index']);
Route::get('recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('recipe-ingredients', [RecipeIngredientController::class, 'index']);
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
