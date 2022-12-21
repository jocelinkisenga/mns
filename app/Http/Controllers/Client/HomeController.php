<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Domains\Ecommerce\Client\Categories\CategorieClientController;
use Domains\Ecommerce\Client\Products\ProductClientController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $domainCategorie;
    public $domainProduct;

    public function __construct()
    {
        $this->domainCategorie = new CategorieClientController;
        $this->domainProduct = new ProductClientController;
    }

    public function index(){
        $categories = $this->domainCategorie->get_all();
        $products = $this->domainProduct->get_all();

        return view("Client.pages.home",compact('categories','products'));
    }
}
