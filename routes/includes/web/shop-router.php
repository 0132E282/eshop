<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/search', [ProductsController::class, 'searchProducts']);
Route::get('/{id}', [ProductsController::class, 'shopDetails']);
Route::get('/', [ProductsController::class, 'showShop']);
