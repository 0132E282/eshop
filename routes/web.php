<?php

use App\Http\Controllers\authController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('/')->group(function () {
    include_once('includes/web/site-router.php');
});


Route::prefix('cart')->group(function () {
    include_once('includes/web/cart-router.php');
});


Route::prefix('shop')->group(function () {
    include_once('includes/web/shop-router.php');
});

Route::prefix('blog')->group(function () {
    include_once('includes/web/blog-router.php');
});

Route::prefix('admin')->group(function () {
    Route::middleware(['auth', 'checkAdmin'])->group(function () {
        Route::get('/', [SiteController::class, 'adminPage'])->name('admin-page');
        Route::prefix('ecommerce/products')->group(function () {
            include_once('includes/admin/product-router.php');
        })->name('products-admin');
        Route::prefix('ecommerce/bill')->group(function () {
            include_once('includes/admin/bill-router.php');
        });
        Route::prefix('/users')->group(function () {
            include_once('includes/admin/user-router.php');
        });
        Route::prefix('post')->group(function () {
            include_once('includes/admin/post-router.php');
        });
    });
    Route::get('/login', [authController::class, 'index'])->name('login-page');
    Route::post('/login', [authController::class, 'loginAdmin']);
    Route::get('/register', [authController::class, 'showFormRegister'])->name('register-admin-page');
    Route::post('/register', [authController::class, 'createAccount']);
    Route::get('/logout', [authController::class, 'logout'])->name('logout-account');
});
