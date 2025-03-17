<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CommandeController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RapportController;
use App\Http\Controllers\Admin\ProductImageController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/admindashboard',[HomeController::class,'index'])->name('admin.dashboard');
    Route::get('/commandes',[CommandeController::class,'index'])->name('admin-commandes');

    Route::get('/adminproducts',[ProductController::class,'index'])->name('admin.products');
    Route::get("/adminproducts/{Product}/is_top", [ProductController::class, 'is_top'])->name("is_top");
    Route::get("/adminproducts/{Product}/is_most_sell", [ProductController::class, 'most_sell'])->name("is_most_sell");

    Route::post('/admin-store',[ProductController::class,'store'])->name('admin.products.store');
    Route::get('/adminProduct/{id}',[ProductController::class,'show'])->name('admin.productDetail');
    Route::put('updateProduct',[ProductController::class,'update'])->name('admin.updateProduct');
    Route::post('/updateQuantity',[ProductController::class,'update_quantity'])->name('admin.updateQuantity');
    Route::get('rapport', [RapportController::class, 'index'])->name('rapport');

    Route::get('/admincategories',[CategoryController::class,'index'])->name('admin.categories');
    Route::get('/admincategories/{Category}/edit',[CategoryController::class,'edit'])->name('admin.categories.edit');
    Route::post('/admincategories/{Category}/update', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::post('/categories',[CategoryController::class,'store'])->name('admin-categories');
    Route::get('/clients', [ClientController::class, 'index'])->name('admin.clients');
    Route::get('/client/{id}', [ClientController::class, 'show'])->name('admin.client.details');
    Route::get('/commandesDetails/{id}',[CommandeController::class,'update'])->name('admin-commandes-update');
    Route::post('rapportSearch', [RapportController::class, 'search'])->name('search');
    route::get('/deleteProduct/{id}', [ProductController::class, 'delete'])->name('admin.delete.product');
    Route::get('/deleteCategorie/{id}',[CategoryController::class,'delete'])->name('admin.delete.categorie');
    Route::get('/restoreCategorie/{id}',[CategoryController::class,'restore'])->name('admin.restore.categorie');
    route::get('/restoreProduct/{id}', [ProductController::class, 'restore'])->name('admin.restore.product');
    route::get('/destroyproduct/{id}', [ProductController::class, 'destroy'])->name('admin.destroy.product');

    Route::post('storeImage', [ProductController::class, 'add_image'])->name('add_image');
    Route::get('/productImage/{ProductImage}/change_stat', [ProductImageController::class, 'change_statut'])->name("change_image_statut");

});
