<?php

declare(strict_types=1);

namespace Domains\Stock\Repositories\Product;

use App\Models\Product;

class ProductRepositorie {

    public function get_all(){
        return Product::all();
    }

    public function get_one(int $id){
        return Product::findOrFail($id);
    }

    public function create_new($data){
        Product::create($data);
    }

    public function store_new_qty($data){
        $this->update_old_qty($data->product_id,$data->quantity);
    }

    private function update_old_qty(int $productid, $qty){
            $product = Product::find($productid);
            $product->update();
    }
}