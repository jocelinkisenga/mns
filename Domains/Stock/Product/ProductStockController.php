<?php 

declare(strict_types=1);

namespace Domains\Stock\Product;

use App\Models\Product;
use Domains\Stock\Repositories\Product\ProductRepository;

class ProductStockController {

  public $repo;

  public function __construct()
  {
    $this->repo = new ProductRepository();
  }

    public function products(){
      return Product::latest()->get();
    }

    public function product(int $id){
        return Product::findOrFail($id);
    }

    public function store($data){
       return  Product::create([
          'category_id'=>$data->category_id,
          'name'=>$data->name,
          'price'=>$data->price
        ]);
    }

    public function update($data){
    
      $product = Product::find($data->product_id);
      $product->update([
        'category_id'=>$data->category_id,
        'name'=>$data->name,
        'price'=>$data->price
      ]);

      

    }

    public function delete($id){
        
    }


    public function quantity($data){
        $this->repo->store_new_qty($data);
    }

}