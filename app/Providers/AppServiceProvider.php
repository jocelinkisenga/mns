<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Route;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);


        Route::bind('ProductImage', function($value){
            return ProductImage::findOrFail($value);
        });
        Route::bind('Category', function($value){
            return Category::findOrFail($value);
        });

        Route::bind('Product', function($value){
            return Product::findOrFail($value);
        });
    }
}
