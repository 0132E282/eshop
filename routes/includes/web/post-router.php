<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('blog-page');
Route::get('/{slug}_{id}', [PostController::class, 'detailPost'])->name('detail-post');
