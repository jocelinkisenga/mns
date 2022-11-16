<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/admin-dashboard',[HomeController::class,'index'])->name('admin.dashboard');
Route::get('/admin-products',[ProductController::class,'index'])->name('admin.products');
Route::get('/admin-categories',[CategoryController::class,'index'])->name('admin.categories');