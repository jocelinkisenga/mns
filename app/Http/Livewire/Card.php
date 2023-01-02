<?php

namespace App\Http\Livewire;

use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Livewire\Component;

class Card extends Component
{
    protected $repository;

    public function __construct()
    {
        $this->repository = new CommandeClientController();
    }
    public function render()
    {
        return view('livewire.card');
    }

    public function add($id){
        
        $this->repository->add($id);
    }
}
