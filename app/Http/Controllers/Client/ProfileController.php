<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function me(){
       
        $mesCommandes = Order::latest()->whereUser_id(Auth::user()->id)->get();
        return view("Client.pages.profile",compact('mesCommandes'));
    }

    public function create(){
        return view('Client.pages.editProfile');
    }

    public function update(Request $request){

        
        $user = User::find($request->user_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

       return redirect()->route('profile');

    }
}
