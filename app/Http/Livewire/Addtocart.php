<?php

namespace App\Http\Livewire;

use Darryldecode\Cart\Facades\CartFacade;
use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use RealRashid\SweetAlert\Facades\Alert;

class Addtocart extends Component
{
    protected $cardRepo;
    public $product;
    public $quantity = 1;

    public function __construct()
    {
        $repository = new CommandeClientController;
        $this->cardRepo = $repository;
    }

    public function render()
    {
        return view('livewire.addtocart');
    }

    /**
     * Summary of add 
     * this function adds a product to a card
     * @param mixed $id
     * @return mixed
     */
    public function add($id)
    {
        if (Auth::check()) {
            $item = CartFacade::get($id);
            if ($item) {
                Alert::alert('Title', 'Message');
                session()->flash('message', "ce produit existe déjà");
                // return redirect()->to("/");
               
            } else {
                $this->cardRepo->add_to_cart($id);
                session()->flash('message', "produit ajouté avec succès");
                $this->emit("cardcounter");

            }

        } else {
            return redirect()->to('/login');
        }

    }

}