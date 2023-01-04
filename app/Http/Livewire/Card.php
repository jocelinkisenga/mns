<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Livewire\Component;

class Card extends Component
{
    protected $repository;
    public $items;

    public function __construct()
    {
        $this->repository = new CommandeClientController();
    }

    public function mount(){
    $this->items = CartFacade::getContent();
    }
    public function render()
    {
        return view('livewire.card');
    }

    public function add($id){
        
        $this->repository->add($id);
    }

    public function empty($id){
        $this->repository->remove($id);
    }
}
