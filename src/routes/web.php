<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/clicked', function () {
    return "hi";
});

use App\Http\Controllers\NetController;
Route::get('/profile', [NetController::class, 'show']);

