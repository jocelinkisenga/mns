<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Categories;

use App\Models\Category;

class CategorieClientController {

    public function get_all(){
        return Category::latest()->get();
    }

    public  function get_one(int $id){

    }
}