<?php

use App\Http\Controllers\BirimController;
use App\Http\Controllers\EsyaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('esyas', EsyaController::class);
Route::resource('birims', BirimController::class);