<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function index(){
       
        return view('Client.pages.cart');
    }
}
