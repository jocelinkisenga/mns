<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Commandes;

use App\Models\Order;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Support\Facades\Auth;

class Checkout {

    public function order($data){

        $order = new Order();

        $order->payment_id = time().str_shuffle("ABCDEF");
        $order->amount = CartFacade::getTotal();
        $order->paid_at = new \DateTime("now");
        $order->user_id = Auth::user()->id;
        $order->nickname = $data->nickname;
        $order->suname = $data->suname;
        $order->country = $data->country;
        $order->address = $data->address;
        $order->phone = $data->phone;
        $order->email = $data->email;
        

        $products = [];

        $i = 0;

        foreach(CartFacade::getContent() as $product){
            $products['product_' .$i][] = $product->name;
            $i++;
        }

        $order->products = serialize($products);


        $order->save();

        $this->stripe_paiement($order, $data);


    }

    public function stripe_paiement($order, $data){

         $stripe = Stripe::make(env('STRIPE_KEY'));
            try {
                $token = $stripe->tokens()->create([
                    'card' => [
                        'number' => $data->card_no,
                        'exp_month' => $data->mm,
                        'exp_year' => $data->yy,
                        'cvc' => $data->cvc,
                    ]
                ]);
                if (!isset($token)) {
                    session()->flash('stripe_err', 'The Stripe token was not generated correctly!');
              
                }
                $customer = $stripe->customers()->create([
                    'name' => $data->nickname . ' ' . $data->suname,
                    'email' => $data->email,
                    'phone' => $data->phone,
                    'address' => [
                        'line1' => $data->address,
                        'country' => $data->country,
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
                    // $this->makeTransaction($order->id, 'approved');
                    // $this->resetCard();
                } else {
                    session()->flash('stripe_err', 'The Stripe token was not generated correctly!');
                
                }
            } catch (\Throwable $e) {
                session()->flash('stripe_err', $e->getMessage());
               
            }


    }
}