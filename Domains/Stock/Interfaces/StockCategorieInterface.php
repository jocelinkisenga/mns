<?php

declare(strict_types=1);

namespace Domains\Stock\Interfaces;
use App\Models\Category;

interface StockCategorieInterface
{

    public function categories();

    public function category(int $id);
    public function store($data);

    public function update(Category $category, $data);

    public function delete(int $id);
}