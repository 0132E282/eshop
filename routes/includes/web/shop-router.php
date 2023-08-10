<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/search', [ProductsController::class, 'searchProducts']);
Route::get('/{id}', [ProductsController::class, 'shopDetails'])->name('details-page');
Route::get('/', [ProductsController::class, 'showShop'])->name('shop-page');
