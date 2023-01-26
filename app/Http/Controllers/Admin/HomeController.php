<?php

namespace App\Http\Controllers\Admin;

use App\Enums\RoleEnum;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        $orders = Order::latest()->limit(5)->get();
        $users = User::latest()->whereRole(RoleEnum::CLIENT)->get();
        return view("Admin.pages.dashboard",compact('orders','users'));
    }
}
