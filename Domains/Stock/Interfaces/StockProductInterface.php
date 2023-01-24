<?php

declare(strict_types=1);

namespace Domains\Stock\Interfaces;

interface StockProductInterface
{

    public function products();
    public function product(int $id);
    public function store($data);

    public function update($data);

    public function delete($id);


    public function quantity($data);
  
}