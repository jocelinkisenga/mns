<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Commandes;

use App\Models\Product;
use Auth;
use Darryldecode\Cart\Facades\CartFacade;
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
		$item = CartFacade::get($product->id);
		if ($item) {

			CartFacade::update($product->id, [
				'quantity' => 1,
			]);
			$this->product_repo->substract_quantity($id);
		} else {
			CartFacade::add($product->id, $product->name, $product->price, 1)->associate("App\Models\Product");
			$this->product_repo->substract_quantity($id);
		}



	}



	public function add_to_cart($id)
	{


		$product = Product::find($id);

		if (!$product) {

			abort(404);

		}

			CartFacade::add($product->id, $product->name, $product->price, 1)->associate("App\Models\Product");
			$this->product_repo->substract_quantity($id);
		



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
		
		$cart_item = CartFacade::get($productid);
		$this->product_repo->restore_quantity($productid, $cart_item['quantity']);
		CartFacade::remove($productid);
	}



	public function reduce_quantity(int $productId){
		$item = CartFacade::get($productId);
		if($item){
			$this->product_repo->restore_quantity($productId, 1);
			
			CartFacade::update($productId, [
				'quantity' => -1,
			]);
			
		}
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