<?php

namespace App\Providers;

use Domains\Ecommerce\Client\Repositories\ClientCategoryRepositorie;
use Domains\Ecommerce\Interfaces\Client\ClientCategorieInterface;
use Domains\Ecommerce\Interfaces\Client\ClientProductInterface;
use Domains\Stock\Repositories\Category\CategoryRepository;
use Illuminate\Support\ServiceProvider;

class RepositorieServiceProvider extends ServiceProvider
{

    private $repositories = [
        ClientCategorieInterface::class => ClientCategoryRepositorie::class,
        ClientProductInterface::class => ClientProductRepositorie::class
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        foreach($this->repositories as $interface => $implementation)
        $this->app->bind($interface, $implementation);
    }
}
