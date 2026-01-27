<?php

use App\Http\Controllers\Food\FoodController;
use App\Http\Controllers\Food\FoodTypeController;
use App\Http\Controllers\Food\FoodSubstituteController;
use App\Http\Controllers\Mailing\MailingController;
use App\Http\Controllers\Recipe\RecipeController;
use App\Http\Controllers\Recipe\RecipeAreaController;
use App\Http\Controllers\Recipe\RecipeCategoryController;
use App\Http\Controllers\Recipe\RecipeIngredientController;
use App\Http\Controllers\Recipe\RecipeTagController;
use App\Http\Controllers\TranslationController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserFavRecipeController;
use App\Http\Middleware\IsAdminMiddleware;

use Illuminate\Http\Request;

// API Routes - Admin Management Routes
Route::middleware([IsAdminMiddleware::class])->group(function () {
    Route::apiResource('foods', FoodController::class);
    Route::apiResource('mailing', MailingController::class);
    Route::post('save-linked-foods', [RecipeIngredientController::class, 'saveLinkedFoods'])->name('save-linked-foods');
    Route::post('save-substitute', [FoodSubstituteController::class, 'update'])->name('save-substitute');
    Route::apiResource('mailings', MailingController::class);
    Route::apiResource('roles', RoleController::class);
    Route::get('recipe-ingredients', [RecipeIngredientController::class, 'index'])->name('recipe-ingredients.index');
    Route::apiResource('translations', TranslationController::class)->except(['edit', 'show']);
    Route::get('translations/{language}', [TranslationController::class, 'show'])->name('translations.show');
    Route::apiResource('users', UserController::class);

    // Admin profile routes
    Route::apiResource('profiles/user', ProfileController::class)->names([
        'index' => 'profiles.user.index',
        'create' => 'profiles.user.create',
        'store' => 'profiles.user.store',
        'show' => 'profiles.user.show',
        'edit' => 'profiles.user.edit',
        'update' => 'profiles.user.update',
        'destroy' => 'profiles.user.destroy',
    ]);

    // Create token route
    Route::get('tokens/create/{user}', [AuthController::class, 'createToken'])->name('tokens.create');
});

// API Routes - Authentication
Route::post('api/login', [AuthController::class, 'login'])->name('api.login');
Route::post('api/logout', [AuthController::class, 'logout'])->middleware('auth')->name('api.logout');
Route::post('api/register', [AuthController::class, 'register'])->name('api.register');
Route::get('api/user', [UserController::class, 'show'])->middleware('auth')->name('api.user');

// API Routes - Autocomplete
Route::get('api/area-autocomplete', [RecipeAreaController::class, 'autocomplete'])->name('area-autocomplete');
Route::get('api/category-autocomplete', [RecipeCategoryController::class, 'autocomplete'])->name('category-autocomplete');
Route::get('api/food-autocomplete', [FoodController::class, 'autocomplete'])->name('food-autocomplete');
Route::get('api/food-type-autocomplete', [FoodTypeController::class, 'autocomplete'])->name('food-type-autocomplete');
Route::get('api/ingredient-autocomplete', [RecipeIngredientController::class, 'autocomplete'])->name('ingredient-autocomplete');
Route::get('api/tag-autocomplete', [RecipeTagController::class, 'autocomplete'])->name('tag-autocomplete');

// API Routes - Foods
Route::get('api/foods', [FoodController::class, 'index'])->name('api.foods.index');
Route::get('api/foods/{food}', [FoodController::class, 'show'])->name('api.foods.show');

// API Routes - Recipes
Route::get('api/recipes', [RecipeController::class, 'index'])->name('api.recipes.index');
Route::get('api/recipes/{recipe}', [RecipeController::class, 'show'])->name('api.recipes.show');

// API Routes - User specific
Route::middleware(['auth'])->group(function () {
    Route::post('api/user/settings', [UserController::class, 'update'])->name('api.user.settings.update');
    Route::get('api/user/favorite-recipes', [UserFavRecipeController::class, 'index'])->name('api.user.favorite-recipes');
    Route::post('api/user/favorite-recipes', [UserFavRecipeController::class, 'store'])->name('api.user.favorite-recipe.store');
    Route::delete('api/user/favorite-recipes/{recipe}', [UserFavRecipeController::class, 'destroy'])->name('api.user.favorite-recipe.destroy');
});

// Vue SPA - All routes fall through to Vue Router
Route::get('/{any?}', function () {
    return view('app');
})->where('any', '.*')->name('spa');