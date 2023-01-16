<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Facades;

use Domains\Ecommerce\Client\Commandes\CommandeClientController;

class CommandeFacade 
{

    public static function __callStatic($name, $argument ){
        return self::resolve($name,$argument);

    }

    public static function resolve($name,  $argument){
        app()->make('CommandeClientController');
    }
    
}
