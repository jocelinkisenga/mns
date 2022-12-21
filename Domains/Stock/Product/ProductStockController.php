<?php 

declare(strict_types=1);

namespace Domains\Stock\Product;

use App\Models\Product;

class ProductStockController {

    public function products(){
      return Product::latest()->get();
    }

    public function product(int $id){

    }

    public function store($data){
       return  Product::create([
          'category_id'=>$data->category_id,
          'name'=>$data->name,
          'price'=>$data->price
        ]);
    }

    public function update(int $id, $data){

    }

    public function delete($id){
        
    }
}