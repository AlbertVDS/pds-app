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
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
|--------------------------------------------------------------------------
| Public Authentication Routes
|--------------------------------------------------------------------------
*/
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum')->name('logout');

/*
|--------------------------------------------------------------------------
| Protected Routes (require auth:sanctum)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {
    // User endpoints
    Route::get('/user', [UserController::class, 'show'])->name('user.show');
    Route::post('/user/settings', [UserController::class, 'settings'])->name('user.settings');
    Route::post('/user/tokens', [UserController::class, 'createToken'])->name('user.tokens.create');
    
    // Language endpoints
    Route::get('/languages', [UserController::class, 'languages'])->name('languages');
    
    // Mailing groups endpoints
    Route::get('/mailing-groups', [UserController::class, 'mailingGroups'])->name('mailing-groups');
    
    // Food endpoints
    Route::get('/foods', [FoodController::class, 'index'])->name('foods.index');
    Route::get('/foods/{food}', [FoodController::class, 'show'])->name('foods.show');
    
    // Recipe endpoints
    Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
    Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
});

/*
|--------------------------------------------------------------------------
| Public Health Check
|--------------------------------------------------------------------------
*/

Route::get('/health', function () {
    return response()->json(['status' => 'ok'], 200);
})->withoutMiddleware('api');

