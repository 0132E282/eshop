<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::post('/create-tag', [ProductsController::class, 'createTagList'])->name('navigate');
Route::get('/category', [ProductsController::class, 'category'])->name('category');
Route::delete('/{id}', [ProductsController::class, 'deleteProduct'])->name('delete-product');
Route::delete('/delete-list', [ProductsController::class, 'deleteProduct'])->name('delete-product-list');
Route::post('/create', [ProductsController::class, 'create'])->name('action-create-product');
Route::get('/create', [ProductsController::class, 'showForm'])->name('create-product-page');
Route::post('/{id}', [ProductsController::class, 'update'])->name('action-update-product');
Route::get('/{id}', [ProductsController::class, 'showForm'])->name('update-product-page');
Route::get('/type/{text}', [ProductsController::class, 'index'])->name('searchProducts');
Route::get('/', [ProductsController::class, 'index'])->name('product')->middleware('sort');
