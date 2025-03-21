<?php

declare(strict_types=1);

namespace Domains\Stock\Repositories;

use App\Models\Category;
use Domains\Stock\Interfaces\StockCategorieInterface;

class StockCategorieRepositorie implements StockCategorieInterface {

    public function categories(){
        return Category::all();
    }

    public function category(int $id){
        return Category::find($id);
    }

    public function store($data){
            Category::create($data);
    }

    public function update(Category $category, $data){
         $category->update($data);
    }

    public function delete(int $id){

    }
}