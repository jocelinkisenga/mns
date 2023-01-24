<?php

declare(strict_types=1);

namespace Domains\Stock\Interfaces;

interface StockCategorieInterface
{

    public function categories();

    public function category(int $id);
    public function store($data);

    public function update(int $id, $data);

    public function delete(int $id);
}