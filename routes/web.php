<?php

use App\Http\Controllers\Food\FoodController;
use App\Http\Controllers\Food\FoodTypeController;
use App\Http\Controllers\Food\FoodSubstitutesController;
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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'Homepage',
    ]);
});

Route::middleware([IsAdminMiddleware::class])->group(function () {
    Route::resource('foods', FoodController::class);
    Route::resource('mailing', MailingController::class);
    Route::post('save-linked-foods', [RecipeIngredientController::class, 'saveLinkedFoods'])->name('save-linked-foods');
    Route::post('save-substitute', [FoodSubstitutesController::class, 'update'])->name('save-substitute');
    Route::resource('mailings', MailingController::class);
    Route::resource('roles', RoleController::class);
    Route::get('recipe-ingredients', [RecipeIngredientController::class, 'index'])->name('recipe-ingredients.index');
    Route::resource('translations', TranslationController::class);
    Route::resource('users', UserController::class);

    // Admin CP profile routes
    Route::resource('profiles/user', ProfileController::class)->names([
        'index' => 'profiles.user.index',
        'create' => 'profiles.user.create',
        'store' => 'profiles.user.store',
        'show' => 'profiles.user.show',
        'edit' => 'profiles.user.edit',
        'update' => 'profiles.user.update',
        'destroy' => 'profiles.user.destroy',
    ]);
});

// Auth routes
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('register', [AuthController::class, 'register'])->name('register');

// Autocomplete routes
Route::get('area-autocomplete', action: [RecipeAreaController::class, 'autocomplete'])->name('area-autocomplete');
Route::get('category-autocomplete', action: [RecipeCategoryController::class, 'autocomplete'])->name('category-autocomplete');
Route::get('food-autocomplete', action: [FoodController::class, 'autocomplete'])->name('food-autocomplete');
Route::get('food-type-autocomplete', action: [FoodTypeController::class, 'autocomplete'])->name('food-type-autocomplete');
Route::get('ingredient-autocomplete', action: [RecipeIngredientController::class, 'autocomplete'])->name('ingredient-autocomplete');
Route::get('tag-autocomplete', action: [RecipeTagController::class, 'autocomplete'])->name('tag-autocomplete');

// Food routes
Route::match(['get', 'post'], 'foods', [FoodController::class, 'index'])->name('foods.index');
// Route::resource('foods', FoodController::class)->except([
//     'create',
//     'edit',
//     'update',
//     'destroy'
// ]);

// Recipe routes
Route::match(['get', 'post'], 'recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');

// Auth user setting routes
Route::middleware(['auth'])->group(function () {
    Route::get('user/settings', [UserController::class, 'edit'])->name('user.settings');
    Route::post('user/settings/update', [UserController::class, 'update'])->name('user.settings.update');
    Route::get('user/favorite-recipes', [UserFavRecipeController::class, 'index'])->name('user.favorite-recipes');
    Route::post('user/favorite-recipes', [UserFavRecipeController::class, 'store'])->name('user.favorite-recipe.store');
    Route::delete('user/favorite-recipes/{recipe}', [UserFavRecipeController::class, 'destroy'])->name('user.favorite-recipe.destroy');
});


Route::get('/login', function () {
    return view('home', [
        'pageTitle' => 'homepage',
    ]);
})
    ->middleware('guest')
    ->name('login');
