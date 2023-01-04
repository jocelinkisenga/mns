<?php

namespace App\Http\Livewire;

use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Addtocart extends Component
{
    protected $cardRepo;
    public $product;   
     public  $quantity = 1;

    public function __construct()
    {
        $repository = new CommandeClientController;
        $this->cardRepo = $repository;
    }

    public function render()
    {
        return view('livewire.addtocart');
    }

    public function add($id){
       if(Auth::check()){
        $this->cardRepo->add($id);
       }else{
        return redirect()->to('/login');
       }
       
    }
    
}


