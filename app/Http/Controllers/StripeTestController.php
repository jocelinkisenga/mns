<?php

namespace App\Http\Controllers;

use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;

class StripeTestController extends Controller
{
    public function index(){
        $stripe = Stripe::make(env('STRIPE_SECRET'));
        $token = $stripe->tokens()->create([
            'card' => [
                'number' =>4242424242424242,
                'exp_month' =>03 ,
                'exp_year' => 23,
                'cvc' => 443,
            ]
        ]);

        if($token){
            $customer = $stripe->customers()->create([
                'name' => "jocelin  kisenga",
                'email' => "jocelin@gmail",
                'phone' => "0991161449",
                'address' => [
                    'line1' => "kansenya n°16",
                    'country' => "DRC",
                ],
                'source' => $token['id']
            ]);

            if($customer){
                $charge = $stripe->charges()->create([
                    'customer' => $customer['id'],
                    'currency' => 'USD',
                    'amount' => 50,
                    'description' => 'Payment for order no' . 456,
                ]);
            }
        }
        else{
            dd("nothing created");
        }
    }
}
