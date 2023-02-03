<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Repositories;

use App\Models\Product;
use Domains\Ecommerce\Interfaces\Client\ClientProductInterface;

class ClientProductRepositorie implements ClientProductInterface {

      /**
       * Summary of get_all
       * @return mixed
       * this function return an array of products
       */

    public function get_all(){
        return Product::latest()->whereVisible(true)->get();
    }

    public function get_one(int $id){
        
    }
}
