<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Commandes;

use App\Models\Product;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;

class CommandeClientController implements CommandeInterfaceRepository {

    
	public function show(){

    }

	// Ajouter un produit au panier
	public function add(Product $product, $quantity){
        $basket = session()->get('basket');
        $detail_product = [
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => $quantity
        ];
        $basket[$product->id] = $detail_product;
        session()->put("basket", $basket);
    }

	// Retirer un produit du panier
	public function remove (Product $product) {
		$basket = session()->get("basket"); // On récupère le panier en session
		unset($basket[$product->id]); // On supprime le produit du tableau $basket
		session()->put("basket", $basket); // On enregistre le panier
	}

	# Vider le panier
	public function empty () {
		session()->forget("basket"); // On supprime le panier en session
	}
}