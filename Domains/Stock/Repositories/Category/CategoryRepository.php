<?php

declare(strict_types=1);

namespace Domains\Stock\Repositories\Category;

use App\Models\Category;

class CategoryRepository {

    
    public function get_all(){
        return Category::all();
    }

    public function get_one(int $id){
        return Category::findOrFail($id);
    }

    public function store($data){
        Category::create($data);
    }

    public function update(int $id, $data){

    }

    public function delete(int $id){
        $category = Category::find($id);
        $category->delete();
        
    }

}