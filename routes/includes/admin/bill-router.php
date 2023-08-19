<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\billProductsController;

Route::delete('/{id}', [billProductsController::class, 'deleteBill'])->name('delete-bill');
Route::delete('/delete-bill/{id}', [billProductsController::class, 'deleteBillProduct'])->name('delete-product-bill');
Route::put('/{id}', [billProductsController::class, 'update'])->name('update');
Route::get('/', [billProductsController::class, 'showTablet'])->name('admin-bill');
