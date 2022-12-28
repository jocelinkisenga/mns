<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function show(string $name, int $id){
        $categories = Category::all();
        $products = Product::whereCategory_id($id)->get();

        return view('Client.pages.categorie',compact('categories','products'));
    }
}
