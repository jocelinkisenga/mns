<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Commandes;

use App\Models\Product;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;

class CommandeClientController implements CommandeInterfaceRepository
{

	protected $quantity = 1;
	public function show()
	{

	}

	/**
	 * Summary of add
	 * @param mixed $id
	 * @return void
	 * this function add data to a basket
	 */

	public function add($id)
	{


		$product = Product::find($id);

		if (!$product) {

			abort(404);

		}

		$basket = session()->get('basket');

		// if basket is empty then this the first product
		if (!$basket) {

			$basket = [
				$id => [
					'id' => $product->id,
					"name" => $product->name,
					"quantity" => 1,
					"price" => $product->price,
					"photo" => $product->image->path
				]
			];

			session()->put('basket', $basket);


		}

		// if basket not empty then check if this product exist then increment quantity
		if (isset($basket[$id])) {

			$basket[$id]['quantity'] = $basket[$id]['quantity'] + $this->quantity;

			session()->put('basket', $basket);



		}

		// if item not exist in basket then add to basket with quantity = 1
		$basket[$id] = [
			'id' => $product->id,
			"name" => $product->name,
			"quantity" => 1,
			"price" => $product->price,
			"photo" => $product->image->path
		];

		session()->put('basket', $basket);

	}

	/**
	 * Summary of remove
	 * @param Product $product
	 * @return void
	 * this function removes a certain product
	 * from
	 * the basket
	 */
	public function remove(Product $product)
	{
		$basket = session()->get("basket"); // On récupère le panier en session
		unset($basket[$product->id]); // On supprime le produit du tableau $basket
		session()->put("basket", $basket); // On enregistre le panier
	}

	/**
	 * Summary of empty
	 * @return void
	 * this function deletes the whole basket
	 */
	public function empty()
	{
		session()->forget("basket"); // On supprime le panier en session
	}
}