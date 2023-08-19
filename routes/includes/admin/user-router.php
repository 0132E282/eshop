<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;

Route::post('/add-user', [authController::class, 'createAccount'])->name('add-user');

Route::get('/trash-user', [userController::class, 'showTable'])->name('trash-user');
Route::get('/add-user', [userController::class, 'showForm'])->name('add-user');
Route::get('/{id}', [userController::class, 'showForm'])->name('update-user');
Route::get('/', [userController::class, 'showTable'])->name('admin-user');


Route::put('/{id}', [authController::class, 'update'])->name('update-user');
Route::put('/restore/{id}', [authController::class, 'restore'])->name('restore-user');



Route::delete('/{id}', [authController::class, 'softDelete'])->name('delete-user');
