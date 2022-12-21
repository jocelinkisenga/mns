<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Domains\Ecommerce\Client\Categories\CategorieClientController;
use Domains\Ecommerce\Client\Products\ProductClientController;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $categorieDom;
    public $productDom;

    public function __construct()
    {
        $this->categorieDom = new CategorieClientController;
        $this->productDom = new ProductClientController;
    }
    public function index(){

        $categories = $this->categorieDom->get_all();
        $products = $this->productDom->get_all();
        return view("Client.pages.products",compact('categories','products'));
    }
}
