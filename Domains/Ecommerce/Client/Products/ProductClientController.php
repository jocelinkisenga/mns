<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Products;

use App\Models\Product;

class ProductClientController {

      /**
       * Summary of get_all
       * @return mixed
       * this function return an array of products
       */

    public function get_all(){
        return Product::latest()->get();
    }

    public function get_one(){
        
    }
}
