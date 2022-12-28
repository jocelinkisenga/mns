<?php

declare(strict_types=1);

namespace Domains\Stock\Repositories\Product;

use App\Models\History;
use App\Models\Product;

class ProductRepository {
    public int $id;

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
        
       $this->id = (int) $data->product_id;
        $this->update_old_qty( $this->id,$data->quantity);
        History::create([
            'product_id'=>$data->product_id,
            'quantity'=>$data->quantity
        ]);
     
    }

    private function update_old_qty(int $productid, $qty){
        
            $product = Product::find($productid);
            $product->update(['old_quantity'=>$qty]);
    }
}