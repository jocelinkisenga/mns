<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;
use App\Models\Category;
use Domains\Stock\Category\CategoryStockController;
use Domains\Stock\Interfaces\StockCategorieInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $DomainController;

    public function __construct(StockCategorieInterface $stockCategorieInterface)
    {
        $this->DomainController = $stockCategorieInterface;
    }
    public function index(){
        $categories = Category::where('visible', 1)->get();
        return view("Admin.pages.categorie.categories",compact('categories'));
    }
    public function edit(Category $categorie){
      return view("Admin.pages.categorie.edit", ["categorie"=>$categorie]);
    }

    public function store(CategorieRequest $categorie){
            if($categorie->hasFile('icon')){
            $icon =  str_replace("public/categories/icons/", "", $categorie->icon->store('public/categories/icons'));
            $this->DomainController->store(["name"=>$categorie->name, "icon"=>$icon]);
            }else{
                $this->DomainController->store(["name"=>$categorie->name]);
            }


            return redirect()->back();
    }

    public function update(UpdateCategorieRequest $request, Category $categorie){
        if($request->hasFile('icon')){
            $icon =  str_replace("public/categories/icons/", "", $request->icon->store('public/categories/icons'));
            $this->DomainController->update($categorie, ["name"=>$request->name, "icon"=>$icon]);
            }else{
                $this->DomainController->update($categorie, ["name"=>$request->name]);
            }


             return redirect()->route('admin.categories');
    }

    public function delete(int $id){
        $categorie = Category::find($id);
        $categorie->update(['visible' => false]);
        return redirect()->back();


    }

    public function restore(int $id){
        $categorie = Category::find($id);
        $categorie->update(['visible' => true]);
        return redirect()->back();
    }
}
