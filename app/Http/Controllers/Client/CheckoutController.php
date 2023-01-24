<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use App\Models\OrderItem;
use Cartalyst\Stripe\Stripe;
use Darryldecode\Cart\Facades\CartFacade;
use DateTime;
use Domains\Ecommerce\Client\Commandes\Checkout;
use Domains\Ecommerce\Interfaces\Client\ClientCheckoutInterface;
use Hamcrest\Core\IsTypeOf;
use Hamcrest\Type\IsInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Type\Integer;

class CheckoutController extends Controller
{
    public int $taille;
    public $checkout_repo;


    public function __construct(ClientCheckoutInterface $clientCheckoutInterface)
    {
        $this->checkout_repo = $clientCheckoutInterface;
    }


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
        
        if(sizeof(CartFacade::getContent()) == 0){
            return redirect()->route("home");
        } else {

            $order = $this->checkout_repo->order($request);
            $commandes = OrderItem::whereOrder_id($order->id)->get();
           
        }
         CartFacade::clear();
        return view('Client.pages.invoce',compact('order','commandes'));
    }

    public function checkout_back(){
     
        return redirect()->route('home');
    }
}
