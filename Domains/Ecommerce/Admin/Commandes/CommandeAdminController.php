<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Admin\Commandes;

use App\Models\Order;

class CommandeAdminController {

    public function get_all(){
        return Order::latest()->get();
    }

    public function get_one(int $commandeId){
        return Order::findOrFail($commandeId);
    }

    public function get_prouved(){

    }

    public function get_unprouved(){

    }

    public function confirm(){

    }

    public function invoice(){
        
    }
}