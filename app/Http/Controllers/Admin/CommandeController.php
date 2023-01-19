<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function index(){
        $commandes = Order::latest()->get();
        return view("Admin.pages.commande.commandes",compact('commandes'));
    }
}
