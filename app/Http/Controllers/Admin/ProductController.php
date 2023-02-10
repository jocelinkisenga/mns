<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\ProductImage;
use Carbon\Carbon;
use Domains\Stock\Interfaces\StockProductInterface;
use Domains\Stock\Product\ProductStockController;
use Illuminate\Http\Request;
use Stripe\Product;

class ProductController extends Controller
{
    public $domainController;

    public function __construct(StockProductInterface $stockProductInterface)
    {
        $this->domainController = $stockProductInterface;
    }
    public function index(){
        $categories = Category::whereVisible(true)->get();
        $products = $this->domainController->products();
        return view('Admin.pages.product.products', compact('categories','products'));
    }

    public function store(ProductRequest $request){
        
       
//  foreach($request->image as $key => $image){
//          echo ("image n°".$key+1..$image->getClientOriginalName())."<br>";
//  }     
        
        // $path = $request->file('image')->storeAs('uploads',$newFile,'public');  
            $product = $this->domainController->store($request);
        
        if ($request->image) {
            
            foreach ($request->image as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '_mns.' . $image->extension();
                $path = $image->storeAs('uploads',$imgName,'public');
                ProductImage::create(['product_id'=>$product['id'],'path'=>$imgName]);
           
            }
          
    }
        // $product = $this->domainController->store($request);
        

        // ProductImage::create(['product_id'=>$product['id'],'path'=>$newFile]);
         return redirect()->back();

    }

    public function show( int $id){
        $product = $this->domainController->product($id);
         $categories = Category::all();

        return view('Admin.pages.product.productDetail',compact("product","categories"));
    }

    public function update(Request $request){
       $this->domainController->update($request);

      if($request->image){
        $imgName = Carbon::now()->timestamp . '_mns.' . $request->image->extension();
        
        $path = $request->image->storeAs('uploads', $imgName, 'public');
          $productImages = ProductImage::whereProduct_id($request->product_id)->whereId(1)->update(['path'=>$imgName]);
        //     dd($productImages);
      }
        return redirect()->back();
    }

    public function update_quantity(Request $request){
        $this->domainController->quantity($request);
        return redirect()->back();
    }

    public function delete(int $id){
        $product = \App\Models\Product::find($id);
        $product->update(['visible' => false]);
        return redirect()->back();
    }

    public function restore(int $id){
        $product = \App\Models\Product::find($id);
        $product->update(['visible' => true]);
        return redirect()->back();
    }



    public function add_image(Request $request)
    {




        if ($request->image) {

            foreach ($request->image as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '_mns.' . $image->extension();
                $path = $image->storeAs('uploads', $imgName, 'public');
                ProductImage::create(['product_id' => $request->product_id, 'path' => $imgName]);

            }
        }
        return redirect()->back();
    }
}
