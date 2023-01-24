<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Domains\Ecommerce\Interfaces\Client\ClientCommandeInterface;
use Livewire\Component;

class Card extends Component
{
    protected $repository;
    public $items;
    protected $listeners = ["addtocart" => "render"];
    protected $interface;

    public function mount(ClientCommandeInterface $clientCommandeInterface){
        $this->interface = $clientCommandeInterface;
    }

    // public function __construct()
    // {
    //     $this->repository = new CommandeClientController();
    // }

    public function render()
    {
        $this->items = CartFacade::getContent();
        return view('livewire.card');
    }

    /**
     * Summary of add : this function adds the product to the basket
     * this function refers the the basket's blade component
     * @param mixed $id
     * @return void
     */
    public function add($id)
    {

        $this->interface->add($id);
        $this->emit('addtocart');
    }


    /**
     * Summary of reduce  : this function reduce the quantity of the product from the baslket
     * @param int $productId
     * @return void
     */
    public function reduce(int $productId)
    {
        $this->interface->reduce_quantity($productId);
        $this->emit('addtocart');
    }


    /**
     * Summary of empty this function deletes a product from the basket
     * @param int $productId
     * @return void
     */
    public function empty(int $productId)
    {
        $this->interface->remove($productId);
    }



}