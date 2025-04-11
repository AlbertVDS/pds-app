<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodSubstitutesController;
use App\Http\Controllers\MailingController;
use App\Http\Controllers\MailDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'pageTitle' => 'homepage',
    ]);
});

Route::resource('foods', FoodController::class);
Route::resource('foods.{foodId}.substitutes', FoodSubstitutesController::class);
Route::resource('mailings', MailingController::class);
Route::resource('mailings.{mailingId}.maildata', MailDataController::class);
Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
