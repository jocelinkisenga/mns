<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Repositories;

use App\Models\Category;
use Domains\Ecommerce\Interfaces\Client\ClientCategorieInterface;

class ClientCategoryRepositorie implements ClientCategorieInterface {


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