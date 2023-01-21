<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function me(){
        $mesCommandes = \App\Models\Order::latest()->whereUser_id(Auth::user()->id)->get();
        return view("Client.pages.profile",compact('mesCommandes'));
    }
}
