<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Domains\Ecommerce\Client\Categories\CategorieClientController;
use Domains\Ecommerce\Client\Products\ProductClientController;
use Domains\Ecommerce\Interfaces\Client\ClientCategorieInterface;
use Domains\Ecommerce\Interfaces\Client\ClientProductInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $categorieDom;
    public $productDom;

    public function __construct(ClientProductInterface $clientProductInterface, ClientCategorieInterface $clientCategorieInterface)
    {
        $this->categorieDom = $clientCategorieInterface;
        $this->productDom = $clientProductInterface;
    }
    public function index(){

        $categories = $this->categorieDom->get_all();
        $products = $this->productDom->get_all();
        return view("Client.pages.products",compact('categories','products'));
    }

    public function show(int $id){
        $product = Product::find($id);
        return view("Client.pages.productDetails", compact('product'));
    }
}
