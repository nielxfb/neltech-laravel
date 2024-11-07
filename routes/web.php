<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'home']);
Route::post('/get-product-by-category', [ProductController::class, 'getByCategory']);
Route::get('/search', [ProductController::class, 'search']);
