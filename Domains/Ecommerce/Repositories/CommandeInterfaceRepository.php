<?php

namespace Domains\Ecommerce\Repositories;

use App\Models\Product as ModelsProduct;


interface CommandeInterfaceRepository {

	// Afficher le panier
	public function show();

	// Ajouter un produit au panier
	public function add(ModelsProduct $product);

	// Retirer un produit du panier
	public function remove(ModelsProduct $product);

	// Vider le panier
	public function empty();

}

?>