<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function me(){
       
        $mesCommandes = Order::latest()->whereUser_id(Auth::user()->id)->get();
        return view("Client.pages.profile",compact('mesCommandes'));
    }
}
