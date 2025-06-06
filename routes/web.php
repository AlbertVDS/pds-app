<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodSubstitutesController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\RecipeAreaController;
use App\Http\Controllers\RecipeCategoryController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RecipeTagController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RecipeIngredientController;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFavRecipeController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'homepage',
    ]);
});

Route::middleware([IsAdminMiddleware::class])->group(function () {
    Route::resource('foods', FoodController::class);
    Route::resource('mailing', MailingController::class);
    Route::post('save-linked-foods', [RecipeIngredientController::class, 'saveLinkedFoods'])->name('save-linked-foods');
    Route::post('save-substitute', [FoodSubstitutesController::class, 'update'])->name('save-substitute');
    Route::resource('mailings', MailingController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('translations', TranslationController::class);
    Route::resource('users', UserController::class);
});

// Auth routes
Route::post('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::post('register', [UserController::class, 'register'])->name('register');

// Autocomplete routes
Route::get('area-autocomplete', action: [RecipeAreaController::class, 'autocomplete'])->name('area-autocomplete');
Route::get('category-autocomplete', action: [RecipeCategoryController::class, 'autocomplete'])->name('category-autocomplete');
Route::get('food-autocomplete', action: [FoodController::class, 'autocomplete'])->name('food-autocomplete');
Route::get('ingredient-autocomplete', action: [RecipeIngredientController::class, 'autocomplete'])->name('ingredient-autocomplete');
Route::get('tag-autocomplete', action: [RecipeTagController::class, 'autocomplete'])->name('tag-autocomplete');

// Food routes
Route::resource('foods', FoodController::class)->except([
    'create',
    'edit',
    'update',
    'destroy'
]);

// Recipe routes
Route::match(['get', 'post'], 'recipes', [RecipeController::class, 'index']);
Route::get('recipes/{id}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('recipe-ingredients', [RecipeIngredientController::class, 'index']);

// User routes
Route::get('user/settings/{id?}', [UserController::class, 'edit'])->name('user.settings');
Route::post('user/settings/update/{id?}', [UserController::class, 'update'])->name('user.settings.update');
Route::get('user/favorite-recipes/{id?}', [UserFavRecipeController::class, 'index'])->name('user.favorite-recipes');
Route::post('user/favorite-recipes', [UserFavRecipeController::class, 'store'])->name('user.favorite-recipe.store');
Route::delete('user/favorite-recipes/{recipe}', [UserFavRecipeController::class, 'destroy'])->name('user.favorite-recipe.destroy');
