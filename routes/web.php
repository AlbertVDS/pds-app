<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodSubstitutesController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\MailDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'homepage',
    ]);
});

Route::resource('foods', FoodController::class);
Route::resource('mailings', MailingController::class);
Route::resource('recipes', RecipeController::class);
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
