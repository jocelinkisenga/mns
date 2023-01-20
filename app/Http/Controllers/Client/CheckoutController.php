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

    public function store(Request $request){

        $order = new Order();

        $order->payment_id = time().str_shuffle("ABCDEF");
        $order->amount = CartFacade::getTotal();
        $order->paid_at = new \DateTime("now");
        $order->user_id = Auth::user()->id;
        $order->nickname = $request->nickname;
        $order->suname = $request->suname;
        $order->country = $request->country;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->email = $request->email;
        

        $products = [];

        $i = 0;

        foreach(CartFacade::getContent() as $product){
            $products['product_' .$i][] = $product->name;
            $i++;
        }

        $order->products = serialize($products);


        $order->save();


       
            $stripe = Stripe::make(env('STRIPE_KEY'));
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $request->card_no,
                        'exp_month' => $request->mm,
                        'exp_year' => $request->yy,
                        'cvc' => $request->cvc,
                    ]
                ]);
                if (!isset($token)) {
                    session()->flash('stripe_err', 'The Stripe token was not generated correctly!');
              
                }
                $customer = $stripe->customers()->create([
                    'name' => $request->nickname . ' ' . $request->suname,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'address' => [
                        'line1' => $request->address,
                        'country' => $request->country,
                    ],
                    'source' => $token['id']
                ]);
                $charge = $stripe->charges()->create([
                    'customer' => $customer['id'],
                    'currency' => 'USD',
                    'amount' => CartFacade::getTotal(),
                    'description' => 'Payment for order no' . $order->id
                ]);
                if ($charge['status'] == 'succeeded') {
                    $this->makeTransaction($order->id, 'approved');
                    $this->resetCard();
                } else {
                    session()->flash('stripe_err', 'The Stripe token was not generated correctly!');
                
                }
            } catch (\Throwable $e) {
                session()->flash('stripe_err', $e->getMessage());
               
            }
        



        // CartFacade::clear();
        return view('Client.pages.invoce');
    }

    public function checkout_back(){
        CartFacade::clear();
        return redirect()->route('home');
    }
}
