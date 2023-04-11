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
use App\Http\Requests\FilterRequest;

class ProductController extends Controller
{
    public $categorieDom;
    public $productDom;

    public function __construct(ClientProductInterface $clientProductInterface, ClientCategorieInterface $clientCategorieInterface)
    {
        $this->categorieDom = $clientCategorieInterface;
        $this->productDom = $clientProductInterface;
    }
    public function index(int $index=0){

        $categories = $this->categorieDom->get_all();
        // $products = $this->productDom->get_all();
        $products = Product::paginate(6);
        // dd($products);
        // dd($prod->links());
        return view("Client.pages.products",compact('categories','products'));
    }
    // public function top_products(){

    // }

    public function choose_color(Request $request){

        $request->session()->put('color-'.$request->input('product_id'), $request->input('color'));
        // $this->dispatchBrowserEvent('swal', [
        //     "position"=> 'top-end',
        //     "icon" => 'success',
        //     "title" =>'couleur selectionné avec succés',
        //     "showConfirmButton" => false,
        //     "timer" => 1500
        // ]);
        return 'ok';

    }
    public function show(int $id){

        $product = Product::find($id);

        return view("Client.pages.productDetails", compact('product'));
    }

    public function top_products(){
        $categories = $this->categorieDom->get_all();
        $products = Product::where("is_top", 1)->paginate(6);
        // $products = Product::paginate(6);
        return view("Client.pages.topProducts",compact("categories",'products'));
    }

    public function most_sell(){
        $categories = $this->categorieDom->get_all();
        $products = Product::where("is_most_sell", 1)->paginate(6);
        // $products = Product::paginate(6);
        return view("Client.pages.topProducts",compact("categories",'products'));
    }
    public function filter(FilterRequest $request){

  $categorie = $request->except(['min', 'max', '_token']);
  $categorie = array_filter($categorie, function($element){
    return $element=="on";
  });

 $cat =  Category::whereIn("name", array_keys($categorie))->get(["id"])->toArray();
$cat = array_map(function($e){
      return $e['id'];
}, $cat);
$products = Product::whereIn("category_id", $cat)->where("price", ">", $request->min)->where("price", "<", $request->max)->get();
  return view("Client.pages.productFilter", ["products"=>$products, "categories"=>$this->categorieDom->get_all()]);

    }



}
