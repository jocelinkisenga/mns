<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommandeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-dashboard',[HomeController::class,'index'])->name('admin.dashboard');
Route::get('/admin-products',[ProductController::class,'index'])->name('admin.products');
Route::get('/admin-categories',[CategoryController::class,'index'])->name('admin.categories');
Route::get('/commandes',[CommandeController::class,'index'])->name('admin-commandes');

Route::post('/categories',[CategoryController::class,'store'])->name('admin-categories');
Route::post('/admin-products',[ProductController::class,'store'])->name('admin.products');