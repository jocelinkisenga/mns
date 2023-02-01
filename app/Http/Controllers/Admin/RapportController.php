<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Domains\Stock\Repositories\RapportStockRepositorie;
use Illuminate\Http\Request;

class RapportController extends Controller
{
    public $rapport_repositorie;
    public function __construct(){
        $this->rapport_repositorie = new RapportStockRepositorie();
    }
    public function index(){
        return view("Admin.pages.rapport");
    }

    public function search(Request $request){
       $rapport = $this->rapport_repositorie->stock($request->date_from, $request->date_to);
        // dd($rapport);
        return view("Admin.pages.rapport", compact("rapport"));
    }
}
