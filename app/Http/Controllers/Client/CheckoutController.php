<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Order;
use Darryldecode\Cart\Facades\CartFacade;
use DateTime;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function create(){
        return view("Client.pages.checkout");
    }

    public function store(CheckoutRequest $request){

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

        CartFacade::clear();
        return redirect()->route('invoce',['id'=>$order->id]);
    }
}
