<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Domains\Ecommerce\Interfaces\Client\ClientCommandeInterface;
use Livewire\Component;
use Illuminate\Http\Request;

class Card extends Component
{
    protected $repository;
    public $items;
    protected $listeners = ["addtocart" => "render"];
    protected $interface;

    // public function mount(ClientCommandeInterface $clientCommandeInterface){
    //     $this->interface = $clientCommandeInterface;
    // }

    // public function __construct()
    // {
    //     $this->repository = new CommandeClientController();
    // }

    public function render()
    {
        $this->items = CartFacade::getContent();
        // dd($this->items);
        return view('livewire.card');
    }

    /**
     * Summary of add : this function adds the product to the basket
     * this function refers the the basket's blade component
     * @param mixed $id
     * @return void
     */
    public function add(ClientCommandeInterface $clientCommandeInterface, $id)
    {
        $this->interface = $clientCommandeInterface;
        $product = Product::find($id);
        if($product->old_quantity == 0){
            $this->dispatchBrowserEvent('swal', [
				"position"=> 'top-end',
				"icon" => 'warning',
				"title" =>'désolé le produidt est indisponible',
				"showConfirmButton" => false,
				"timer" => 1500
			]);
        } else {



        $this->interface->add($id);
        $this->emit('addtocart');
    }
    }

    public function choose_color(Request $request, $color, $product_id){

        $request->session()->put('color-'.$product_id, $color);
        // $this->dispatchBrowserEvent('swal', [
        //     "position"=> 'top-end',
        //     "icon" => 'success',
        //     "title" =>'couleur selectionné avec succés',
        //     "showConfirmButton" => false,
        //     "timer" => 1500
        // ]);
        
    }


    /**
     * Summary of reduce  : this function reduce the quantity of the product from the baslket
     * @param int $productId
     * @return void
     */
    public function reduce(ClientCommandeInterface $clientCommandeInterface, int $productId)
    {
        $this->interface = $clientCommandeInterface;
        $this->interface->reduce_quantity($productId);
        $this->emit('addtocart');
    }


    /**
     * Summary of empty this function deletes a product from the basket
     * @param int $productId
     * @return void
     */
    public function empty(ClientCommandeInterface $clientCommandeInterface, int $productId)
    {
        $this->interface = $clientCommandeInterface;
        $this->interface->remove($productId);
    }



}