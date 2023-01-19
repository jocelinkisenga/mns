<?php

use App\Http\Controllers\Client\CategorieController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\CardController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\InvoceController;
use App\Http\Controllers\Client\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/products',[ProductController::class,'index'])->name("client-products");
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('{name}/{id}',[CategorieController::class,'show'])->name('client.categorie');

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CardController::class, 'index'])->name('client-cart');
    Route::get('/checkout', [CheckoutController::class, 'create'])->name('client-checkout');
    Route::post('checkout', [CheckoutController::class, 'store'])->name('store-order');
    Route::get('/invoce/{id}', [InvoceController::class, 'show'])->name('invoce');
});
