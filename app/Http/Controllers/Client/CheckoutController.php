<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use Cartalyst\Stripe\Stripe;
use Darryldecode\Cart\Facades\CartFacade;
use DateTime;
use Hamcrest\Core\IsTypeOf;
use Hamcrest\Type\IsInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class CheckoutController extends Controller
{
    public int $taille;
    public function create(){

        $this->taille = (int) (sizeof(CartFacade::getContent()));
    
        if($this->taille === 0)
        {
            session()->flash('message', 'veillez ajouter des produits dans votre panier');
            return redirect()->back();
           
        } else{
            return view('Client.pages.checkout');
        }
      
    
       
    }

    public function store(CheckoutRequest $request){



       



        $commandes = CartFacade::getContent();
        return view('Client.pages.invoce',compact('order','commandes'));
    }

    public function checkout_back(){
        CartFacade::clear();
        return redirect()->route('home');
    }
}
