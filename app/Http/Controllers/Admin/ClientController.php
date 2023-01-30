<?php

namespace App\Http\Controllers\Admin;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = User::whereRole(RoleEnum::CLIENT)->get();
        return view("Admin.pages.clients", compact('clients'));
    }

    public function show(int $id){
        $orders = Order::latest()->whereUser_id($id)->get();
        $client = User::find($id);
        return view('Admin.pages.clientDetails', compact("orders","client"));
    }
}
