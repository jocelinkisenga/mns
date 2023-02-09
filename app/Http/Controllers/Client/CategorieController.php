<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function show(int $id){
        $categories = Category::whereVisible(true)->get();
        $products = Product::whereCategory_id($id)->whereVisible(true)->get();

        return view('Client.pages.categorie',compact('categories','products'));
    }
}
