<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Commandes;

use App\Models\Order;
use App\Models\OrderItem;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Darryldecode\Cart\Facades\CartFacade;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientCheckoutRepositorie {

    public $latest;
    public $data;
    public $latestOrder;

    public function order($donnes){

        $this->data = $donnes;
        DB::transaction(function () {


                $order = new Order();

                $order->payment_id = time() . str_shuffle("ABCDEF");
                $order->amount = CartFacade::getTotal();
                $order->paid_at = new DateTime("now");
                $order->user_id = Auth::user()->id;
                $order->nickname = $this->data->nickname;
                $order->suname = $this->data->suname;
                $order->country = $this->data->country;
                $order->address = $this->data->address;
                $order->phone = $this->data->phone;
                $order->email = $this->data->email;

                $order->save();




                foreach (CartFacade::getContent() as $product) {
                    $order_item = new OrderItem();

                    $order_item->product_id = $product->id;
                    $order_item->order_id = $order->id;
                    $order_item->price = $product->price;
                    $order_item->quantity = $product->quantity;

                    $order_item->save();
                }




                $stripe = Stripe::make(env('STRIPE_KEY'));
                try {
                    $token = $stripe->tokens()->create([
                        'card' => [
                            'number' => $this->data->card_no,
                            'exp_month' => $this->data->mm,
                            'exp_year' => $this->data->yy,
                            'cvc' => $this->data->cvc,
                        ]
                    ]);
                    if (!isset($token)) {
                        session()->flash('stripe_err', 'The Stripe token was not generated correctly!');

                    }
                    $customer = $stripe->customers()->create([
                        'name' => $this->data->nickname . ' ' . $this->data->suname,
                        'email' => $this->data->email,
                        'phone' => $this->data->phone,
                        'address' => [
                            'line1' => $this->data->address,
                            'country' => $this->data->country,
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


                    // $this->order_item($order);
                    // $this->stripe_paiement($order, $this->data);

                    // $this->latest_order($order);
                }

                $this->latestOrder = $order;
            

        });
        return $this->latestOrder;

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

    public function latest_order($order){
        return $this->latest = $order;
    }

    private function order_item($order){

        foreach(CartFacade::getContent() as $product){
            $order_item = new OrderItem();

            $order_item->product_id = $product->id;
            $order_item->order_id = $order->id;
            $order_item->price = $product->price;
            $order_item->quantity = $product->quantity;

            $order_item->save();
        }

    

    }
}