<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Interfaces\Client;


interface ClientCheckoutInterface
{


    public function order($donnes);

    public function stripe_paiement($order, $data);
    public function latest_order($order);

   

}