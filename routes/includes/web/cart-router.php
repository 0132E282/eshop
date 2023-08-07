<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\billProductsController;

Route::get('/{$id}', [billProductsController::class, 'deleteProductCart']);
Route::get('/checkout', [billProductsController::class, 'showFormCheckout']);
Route::post('/checkout/create-bill', [billProductsController::class, 'createBill']);
Route::post('/', [billProductsController::class, 'addProductToShoppingCart']);
Route::get('/', [billProductsController::class, 'showCart']);
