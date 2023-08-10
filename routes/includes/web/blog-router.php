<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/{id}', [BlogController::class, 'detailsBlog']);
Route::get('/', [BlogController::class, 'index'])->name('blog-page');
