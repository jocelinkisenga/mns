<?php

declare(strict_types=1);

namespace Domains\Ecommerce\Interfaces\Admin;


interface AdminCommandeInterface 
    
{

    public function get_all();

    public function get_one(int $commandeId);

    public function get_prouved();

    public function get_unprouved();

    public function confirm();

    public function invoice();
        
    
    
}
