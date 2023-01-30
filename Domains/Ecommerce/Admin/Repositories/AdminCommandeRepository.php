<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Admin\Repositories;

use App\Models\Order;
use Domains\Ecommerce\Interfaces\Admin\AdminCommandeInterface;

class AdminCommandeRepository implements AdminCommandeInterface {

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

    public function confirm(int $commandeId){

        $commande = Order::find($commandeId);
        $commande->update([
            'status' => 1
        ]);
      
     
    }

    public function invoice(){
        
    }
}