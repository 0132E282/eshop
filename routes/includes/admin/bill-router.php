<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\billProductsController;

Route::delete('/{id}', [billProductsController::class, 'deleteBill']);
Route::get('/', [billProductsController::class, 'showTablet'])->name('bill');
