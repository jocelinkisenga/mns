<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Domains\Ecommerce\Admin\Commandes\CommandeAdminController;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public $commande_repo;

    public function __construct()
    {
        $this->commande_repo = new CommandeAdminController();
    }
    public function index(){
        $commandes = $this->commande_repo->get_all();
        return view("Admin.pages.commande.commandes",compact('commandes'));
    }

    public function show(int $commandeId){
        $this->commande_repo->get_one($commandeId);
    }
}
