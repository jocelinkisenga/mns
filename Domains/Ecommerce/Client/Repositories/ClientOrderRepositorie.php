<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Client\Repositories;

use App\Models\Product;
use Auth;
use Darryldecode\Cart\Facades\CartFacade;
use Domains\Ecommerce\Interfaces\Client\ClientCommandeInterface;
use Domains\Ecommerce\Repositories\CommandeInterfaceRepository;
use Domains\Stock\Repositories\Product\ProductRepository;
use Domains\Stock\Utilities\Product\ProductUtility;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\ComponentConcerns\ReceivesEvents;



class ClientOrderRepositorie implements ClientCommandeInterface
{

	protected $quantity = 1;
	private $product_repo;

	public function __construct()
	{
		$this->product_repo = new ProductUtility;
	}

	public function show(){
		
	}

	/**
	 * Summary of add
	 * @param mixed $id
	 * @return void
	 * this function add data to a basket
	 */

	public function add($id)
	{


		$product = Product::whereId($id)->with('image')->first();
		
		
		if ( $product->old_quantity == 0) {



		}
		$item = CartFacade::get($product->id);
		if ($item) {

			CartFacade::update($product->id, [
				'quantity' => 1,
			]);
			$this->product_repo->substract_quantity($id);
		} else {
			CartFacade::add([
					'id'=>$product->id, 
					'name'=>$product->name,
					'price'=> $product->price,
				 	'quantity' => 1,
					'image' => $product ->image->first()["path"],
			])->associate("App\Models\Product");
			$this->product_repo->substract_quantity($id);
		}



	}



	public function add_to_cart($id)
	{

		$product = Product::whereId($id)->with('image')->first();
		
		if ( $product->old_quantity == 0) {



		} else {

			CartFacade::add([
				'id'=>$product->id, 
				'name'=>$product->name,
				'price'=> $product->price,
			 	'quantity' => 1,
				'attributes' => array('image' => $product ->image->first()["path"]),
			])->associate("App\Models\Product");
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
		
		$cart_item = CartFacade::get($productid);
		$this->product_repo->restore_quantity($productid, $cart_item['quantity']);
		CartFacade::remove($productid);
	}



	public function reduce_quantity(int $productId){
		$item = CartFacade::get($productId);
	
		if($item !== null){
		
			$this->product_repo->restore_quantity($productId, 1);
			
		$cart = CartFacade::update($productId, [
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