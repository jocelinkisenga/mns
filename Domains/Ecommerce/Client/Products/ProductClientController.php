<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Products;

use App\Models\Product;

class ProductClientController {

    public function get_all(){
        return Product::latest()->get();
    }

    public function get_one(){
        
    }
}
