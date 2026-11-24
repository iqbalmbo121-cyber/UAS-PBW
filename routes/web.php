<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthController;

// Rute Publik
Route::get('/', function () {
    $topSellers = Product::take(3)->get();
    return view('home', ['topSellers' => $topSellers]);
})->name('home');

// Rute statis
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/contact', function () { return view('contact'); })->name('contact');

// Rute Shop & Produk
Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');
Route::get('/shop/{category:slug}', [ProductController::class, 'showCategory'])->name('shop.category');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');



// Rute Autentikasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute pengguna yang sudah login
Route::middleware(['auth'])->group(function () {

    // Rute Keranjang Belanja
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');

    // Rute checkout
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');

});
