<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Interfaces\Client;


interface ClientCommandeInterface
{

    
	public function show();

	/**
	 * Summary of add
	 * @param mixed $id
	 * @return void
	 * this function add data to a basket
	 */

	public function add($id);



    public function add_to_cart($id);



	/**
	 * Summary of remove
	 * @param Product $product
	 * @return void
	 * this function removes a certain product
	 * from
	 * the basket
	 */
	public function remove( $productid);



    public function reduce_quantity(int $productId);

	/**
	 * Summary of empty
	 * @return void
	 * this function deletes the whole basket
	 */
    public function empty();


}