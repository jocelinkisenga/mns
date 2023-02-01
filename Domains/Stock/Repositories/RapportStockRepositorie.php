<?php

declare(strict_types=1);

namespace Domains\Stock\Repositories;
use Illuminate\Support\Facades\DB;

class RapportStockRepositorie {

    public function stock($from, $to){
        DB::statement("SET SQL_MODE=''");
     $result =   DB::select("SELECT products.name,DATE(histories.created_at), products.price as vente, products.old_quantity,
                                    (SELECT SUM(quantity) 
                                        FROM histories 
                                        WHERE histories.product_id = products.id 
                                        AND DATE(histories.created_at) >= '$from'AND DATE(histories.created_at) <= '$to') as entries,
                                     (SELECT SUM(order_items.quantity)
                                         FROM order_items WHERE  order_items.product_id = products.id
                                          AND DATE(order_items.created_at) >= '$from'AND DATE(order_items.created_at) <= '$to') as outputs 
                                FROM histories, products,orders, order_items WHERE DATE(histories.created_at) >= '$from' AND DATE(histories.created_at) <= '$to' GROUP BY (products.name)");



        $data = [
            "results" => $result,
            "from" => $from,
            "to" => $to
        ];
//$result = HystoryProduct::with('produit')->groupBy("histories.product_id")->get();
return $data;
    }

    /*
      SELECT products.name,DATE(histories.created_at), products.price as vente, products.old_quantity,
                                    (SELECT SUM(quantity) 
                                        FROM histories 
                                        WHERE histories.product_id = products.id
                                        AND DATE(histories.created_at) >= '2023-01-11'AND DATE(histories.created_at) <= '2023-02-01') as entries,
                                     (SELECT SUM(order_items.quantity)
                                         FROM order_items, products WHERE  order_items.product_id = products.id
                                          AND DATE(order_items.created_at) >= '2023-01-11'AND DATE(order_items.created_at) <= '2023-02-01') as outputs 
                                FROM histories, products,orders, order_items WHERE DATE(histories.created_at) >= '2023-01-11' AND DATE(histories.created_at) <= '2023-02-01' GROUP BY (products.name)
     */

}