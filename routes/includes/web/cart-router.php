<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\billProductsController;

Route::delete('{id}', [billProductsController::class, 'delete'])->name('delete-cart');
Route::put('/{$id}', [billProductsController::class, 'update'])->name('put-cart');
Route::get('/checkout', [billProductsController::class, 'showFormCheckout'])->name('check-out');
Route::post('/checkout/create-bill', [billProductsController::class, 'createBill']);
Route::post('/', [billProductsController::class, 'addProductToShoppingCart']);
Route::get('/', [billProductsController::class, 'showCart'])->name('cart-page');
