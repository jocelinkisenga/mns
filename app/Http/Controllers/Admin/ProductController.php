<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\ProductImage;
use Domains\Stock\Product\ProductStockController;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $domainController;

    public function __construct()
    {
        $this->domainController = new ProductStockController();
    }
    public function index(){
        $categories = Category::all();
        $products = $this->domainController->products();
        return view('Admin.pages.product.products', compact('categories','products'));
    }

    public function store(ProductRequest $request){
        $newFile = time().'_'.$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('uploads',$newFile,'public');   

        $product = $this->domainController->store($request);

        ProductImage::create(['product_id'=>$product['id'],'path'=>$newFile]);
        return redirect()->back();

    }
}
