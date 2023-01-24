<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index( $id){
    
        $order = Order::whereId($id)->with("order_items")->first();
        $commandes = OrderItem::whereOrder_id($id)->get();
        return view("Client.pages.orderDetails",compact("order","commandes"));
    }
}
