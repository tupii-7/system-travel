<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

Route::get('/', function () {
    return view('home');
});

Route::get('/destinations', [DestinationController::class, 'index']);