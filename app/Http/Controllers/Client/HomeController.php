<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Darryldecode\Cart\Cart as CartCart;
use Darryldecode\Cart\Facades\CartFacade;
use Domains\Ecommerce\Client\Categories\CategorieClientController;
use Domains\Ecommerce\Client\Products\ProductClientController;
use Domains\Ecommerce\Interfaces\Client\ClientCategorieInterface;
use Domains\Ecommerce\Interfaces\Client\ClientProductInterface;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public $domainCategorie;
    public $domainProduct;

    public function __construct(ClientCategorieInterface $categorieInterface, ClientProductInterface $productInterface )
    {
        $this->domainCategorie = $categorieInterface;
        $this->domainProduct = $productInterface;
    }

    public function index(){

     
        $categories = $this->domainCategorie->get_all();
        $products = $this->domainProduct->get_all();

        return view("Client.pages.home",compact('categories','products'));
    }
}
