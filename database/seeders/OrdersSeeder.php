<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count=5;
        for ($i=1;$i<=$count;$i++){
            DB::table('orders')->insert([

                'customers_id'=>$i,
                'products_id'=>$i,
                'price'=>random_int(1,100000),
                'ship_address'=>Str::random(50),
                'payment_method'=>Str::random(20),
                'created_at'=>now(),

            ]);
        }

    }
}
