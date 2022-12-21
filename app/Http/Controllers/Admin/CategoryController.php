<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Models\Category;
use Domains\Stock\Category\CategoryStockController;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $DomainController;

    public function __construct()
    {
        $this->DomainController = new CategoryStockController();
    }
    public function index(){
        $categories = Category::latest()->get();
        return view("Admin.pages.categorie.categories",compact('categories'));
    }

    public function store(CategorieRequest $categorie){
            $this->DomainController->store($categorie->name);

            return redirect()->back();
    }
}
