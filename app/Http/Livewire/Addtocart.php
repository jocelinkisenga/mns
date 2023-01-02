<?php

namespace App\Http\Livewire;

use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;
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
       
        $this->cardRepo->add($id);
    }
    
}


