<?php

namespace Domains\Providers;

use Domains\Ecommerce\Admin\Repositories\AdminCommandeRepository;
use Domains\Ecommerce\Client\Repositories\ClientCategoryRepositorie;
use Domains\Ecommerce\Client\Repositories\ClientOrderRepositorie;
use Domains\Ecommerce\Client\Repositories\ClientProductRepositorie;
use Domains\Ecommerce\Interfaces\Admin\AdminCommandeInterface;
use Domains\Ecommerce\Interfaces\Client\ClientCategorieInterface;
use Domains\Ecommerce\Interfaces\Client\ClientCommandeInterface;
use Domains\Ecommerce\Interfaces\Client\ClientProductInterface;
use Illuminate\Support\ServiceProvider;

class RepositorieServiceProvider extends ServiceProvider
{

    private $repositories = [
        ClientCategorieInterface::class => ClientCategoryRepositorie::class,
        ClientProductInterface::class => ClientProductRepositorie::class,
        ClientCommandeInterface::class => ClientOrderRepositorie::class,
        AdminCommandeInterface::class => AdminCommandeRepository::class,
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
