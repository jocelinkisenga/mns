<?php

declare(strict_types=1);

namespace Domains\Stock\Category;

use App\Models\Category;

class CategoryStockController {
    
    public function categories(){

    }

    public function category(int $id){

    }

    public function store($data){
            Category::create(['name'=>$data]);
    }

    public function update(int $id, $data){

    }

    public function delete(int $id){
        
    }
}