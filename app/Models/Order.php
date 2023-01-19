<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['payment_id', 'amount', 'products', 'paid_at', 'user_id','nickname','suname','country','address','phone','email',];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


    /*
     $stripe = new \Stripe\StripeClient("sk_test_4eC39HqLyjWDarjtT1zdp7dc");
$charge = $stripe->charges->create([
  'amount' => 2000,
  'currency' => 'usd',
  'source' => 'tok_mastercard', // obtained with Stripe.js
  'description' => 'My First Test Charge (created for API docs at https://www.stripe.com/docs/api)'

     */
}
