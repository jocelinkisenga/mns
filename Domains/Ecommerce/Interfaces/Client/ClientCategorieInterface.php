<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Interfaces\Client;


interface ClientCategorieInterface
{


    public function get_all();

    public function get_one(int $id);

}