<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductImageRequest;
use App\Models\ProductImage;
use App\Models\ImageStatut;


class ProductImageController extends Controller
{
    //

    public function change_statut(Request $request, ProductImage $image){

        $all = $image->product->image;
        foreach ($all as  $img) {
           if($img->id!=$image->id){
            if($img->statut!=null){
                $img->statut->update(["isfirst"=>0]);
            }else{
              ImageStatut::create(["product_image_id"=>$img->id, "isfirst"=>0]);
            }
           }else{
            if($img->statut!=null){
                $img->statut->update(["isfirst"=>1]);
            }else{
                ImageStatut::create(["product_image_id"=>$img->id, "isfirst"=>1]);
            }

           }
        }

    }
}
