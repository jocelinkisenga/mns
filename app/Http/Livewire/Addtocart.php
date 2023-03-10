<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Darryldecode\Cart\Facades\CartFacade;
use Domains\Ecommerce\Client\Commandes\CommandeClientController;
use Domains\Ecommerce\Interfaces\Client\ClientCommandeInterface;
use Domains\Ecommerce\Interfaces\Client\ClientProductInterface;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use RealRashid\SweetAlert\Facades\Alert;

class Addtocart extends Component
{
    protected $cardRepo;
    public $product;
    public $quantity = 1;




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
    public function add($id, ClientCommandeInterface $clientCommandeInterface)
    {
        $this->cardRepo = $clientCommandeInterface;

        $product = Product::find($id);
        if ($product->old_quantity == 0) {
            $this->dispatchBrowserEvent('swal', [
                "position" => 'top-end',
                "icon" => 'warning',
                "title" => "Désolé, ce produit est actuellement en rupture de stock. Nous travaillons pour renouveler notre inventaire. Nous vous invitons à revenir dans quelques temps ou à découvrir d'autres produits similaires disponibles sur notre site.",
                "showConfirmButton" => false,
                "timer" => 9500
            ]);
        } else {
            if (Auth::check()) {
                $item = CartFacade::get($id);
                if ($item) {


                    $this->dispatchBrowserEvent('swal', [
                        "position" => 'top-end',
                        "icon" => 'warning',
                        "title" => 'ce produit existe dans le panier',
                        "showConfirmButton" => false,
                        "timer" => 1500
                    ]);



                } else {
                    $this->cardRepo->add_to_cart($id);
                    $this->dispatchBrowserEvent('swal', [
                        "position" => 'top-end',
                        "icon" => 'success',
                        "title" => 'ce produit ajouté avec succés',
                        "showConfirmButton" => false,
                        "timer" => 1500
                    ]);
                    $this->emit("cardcounter");

                }

            } else {
                return redirect()->to('/login');
            }

        }

    }

}
