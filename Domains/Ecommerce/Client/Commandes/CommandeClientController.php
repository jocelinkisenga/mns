<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Commandes;

use App\Models\Product;
use Auth;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;
use Domains\Stock\Repositories\Product\ProductRepository;
use Gloudemans\Shoppingcart\Facades\Cart;

class CommandeClientController implements CommandeInterfaceRepository
{

	protected $quantity = 1;
	private $product_repo;

	public function __construct()
	{
		$this->product_repo = new ProductRepository;
	}

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
		$item = \Gloudemans\Shoppingcart\Facades\Cart::get($product->id);
		if ($item) {

			\Gloudemans\Shoppingcart\Facades\Cart::update($product->id, [
				'quantity' => 1,
			]);
			$this->product_repo->substract_quantity($id);
		} else {
			\Gloudemans\Shoppingcart\Facades\Cart::add($product->id, $product->name, $product->price, 1)->associate("App\Models\Product");
			$this->product_repo->substract_quantity($id);
		}



	}

	/**
	 * Summary of remove
	 * @param Product $product
	 * @return void
	 * this function removes a certain product
	 * from
	 * the basket
	 */
	public function remove( $productid)
	{
		$cart_item = \Gloudemans\Shoppingcart\Facades\Cart::get($productid);
		$this->product_repo->restore_quantity($productid, $cart_item['quantity']);
		\Gloudemans\Shoppingcart\Facades\Cart::remove($productid);
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