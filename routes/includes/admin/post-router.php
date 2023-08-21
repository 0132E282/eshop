<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'showTablet'])->name('admin-post');
Route::get('/create', [PostController::class, 'showForm'])->name('create-post');
Route::post('/create', [PostController::class, 'create'])->name('create-post');
