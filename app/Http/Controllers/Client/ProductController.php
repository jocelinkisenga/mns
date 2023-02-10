<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Domains\Ecommerce\Client\Categories\CategorieClientController;
use Domains\Ecommerce\Client\Products\ProductClientController;
use Domains\Ecommerce\Interfaces\Client\ClientCategorieInterface;
use Domains\Ecommerce\Interfaces\Client\ClientProductInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Nette\Utils\Random;

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

    public function top_products(){
        $categories = Category::whereVisible(true)->get();
        $products = Product::inRandomOrder()->whereVisible(true)->with('image')->get();
        return view("Client.pages.topProducts",compact("categories",'products'));
    }
   

}
