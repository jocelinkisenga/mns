<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Categories;

use App\Models\Category;

class CategorieClientController {


      /**
       * Summary of get_all
       * @return mixed
       */

    public function get_all(){
        return Category::latest()->get();
    }

    /**
     * Summary of get_one
     * @param int $id
     * @return void
     */
    public  function get_one(int $id){

    }
}