<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoceController extends Controller
{
    //

    public function show(int $id){
        return view("Client.pages.invoce");
    }
}
