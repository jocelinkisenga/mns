<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommandeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth','admin'])->group(function () {
    Route::get('/admin-dashboard',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/commandes',[CommandeController::class,'index'])->name('admin-commandes');
    
    Route::get('/admin-products',[ProductController::class,'index'])->name('admin.products');
    Route::post('/admin-products',[ProductController::class,'store'])->name('admin.products');
    Route::get('/adminProduct/{id}',[ProductController::class,'show'])->name('admin.productDetail');
    Route::put('updateProduct',[ProductController::class,'update'])->name('admin.updateProduct');
    Route::post('/updateQuantity',[ProductController::class,'update_quantity'])->name('admin.updateQuantity');
    
    
    Route::get('/admin-categories',[CategoryController::class,'index'])->name('admin.categories');
    Route::post('/categories',[CategoryController::class,'store'])->name('admin-categories');
    
});
