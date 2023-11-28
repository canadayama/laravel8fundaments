<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

// Laravel 8 (New)
Route::get('/products', [ProductsController::class, 'index']);
// Route::get('/products/about', [ProductsController::class, 'about']);

// Laravel 8 (New)
//Route::get('/products', 'App\Http\Controllers\ProductsController@index');

// Before Laravel 8
// Route::get('/products', 'ProductsController@index');