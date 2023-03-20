<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\ProductImage;
use App\Models\ImageStatut;
use Carbon\Carbon;
use Domains\Stock\Interfaces\StockProductInterface;
use Domains\Stock\Product\ProductStockController;
use Illuminate\Http\Request;
use Stripe\Product;
use App\Models\Product as Produit;
use App\Models\Color;

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

    public function most_sell(Produit $produit){
         if($produit->is_most_sell==1){
            $produit->update(['is_most_sell'=>0]);
         }else{
            $produit->update(['is_most_sell'=>1]);
         }
          return redirect()->back();
    }
    public function is_top(Produit $produit){

        if($produit->is_top==1){
           $produit->update(['is_top'=>0]);
        }else{
           $produit->update(['is_top'=>1]);
        }
        return redirect()->back();
   }

    public function store(ProductRequest $request){




            $product = $this->domainController->store($request);

        if ($request->image) {

            foreach ($request->image as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '_mns.' . $image->extension();
                $path = $image->storeAs('uploads',$imgName,'public');
               $img =  ProductImage::create(['product_id'=>$product['id'],'path'=>$imgName]);
               ImageStatut::create(['product_image_id'=>$img->id,
                                    'isfirst'=>1]);
            }

    }

    foreach ($request->input() as $key => $value) {
        if(preg_match("/couleur/", $key)){
            Color::create([
                "name"=>$value,
                "product_id"=>$product->id
            ]);
        }
    }

         return redirect()->back();

    }

    public function show( int $id){
        $product = $this->domainController->product($id);
         $categories = Category::all();
// dd($product);
        return view('Admin.pages.product.productDetail',compact("product","categories"));
    }

    public function update(Request $request){
       $this->domainController->update($request);

      if($request->image){
        $imgName = Carbon::now()->timestamp . '_mns.' . $request->image->extension();

        $path = $request->image->storeAs('uploads', $imgName, 'public');
          $productImages = ProductImage::whereProduct_id($request->product_id)->first();
          $productImages->update(['path'=>$imgName]);
          $produits = Produit::where("id",  $request->product_id)->get();
        //   $produits = $produits->toArray();
    //    dd($produits);
        foreach ($produits as  $p) {
           foreach ($p->image as $e) {
            if($e->statut!=null){
                $e->statut->update(["isfirst"=>0]);
              }
           }

        }

          if($productImages->statut!=null){
        $stat = $productImages->statut;
        $stat->update(["isfirst"=>1]);
       }else{
        ImageStatut::create(['product_image_id'=>$productImages->id,
        'isfirst'=>1]);
       }

      }
      $product = Produit::where("id",  $request->product_id)->first();
      foreach ($request->input() as $key => $value) {
        if(preg_match("/couleur/", $key)){
            Color::create([
                "name"=>$value,
                "product_id"=>$product->id
            ]);
        }
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
               $img =  ProductImage::create(['product_id' => $request->product_id, 'path' => $imgName]);
                ImageStatut::create(['product_image_id'=>$img->id,
                                    'isfirst'=>0]);
            }
        }
        return redirect()->back();
    }

    public function destroy(int $id){
        $product = \App\Models\Product::findOrFail($id);
        $product->delete();
        return redirect()->back();
    }
}
