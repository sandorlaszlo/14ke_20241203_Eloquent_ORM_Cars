<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::resource('/cars', CarController::class);
Route::resource('categories', CategoryController::class);
