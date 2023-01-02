<?php

namespace App\Providers;

use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;
use Illuminate\Support\ServiceProvider;

class BasketProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CommandeInterfaceRepository::class,CommandeClientController::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
