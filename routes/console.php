<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Schedule::call(function () {
    Artisan::call('app:recipe-sync');
})->weekly()->description('Sync recipes with recipe API');

Schedule::call(function () {
    Artisan::call('mailing:send');
})->everyFiveMinutes()->description('Send scheduled mail');
