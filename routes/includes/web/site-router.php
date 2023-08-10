<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home-page');
Route::get('contact-us', [SiteController::class, 'showContactPage']);
Route::get('search/{type}/{text}', [SiteController::class, 'search'])->name('search');
