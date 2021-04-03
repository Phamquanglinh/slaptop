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
     * @throws \Exception
     */
    public function run()
    {

        DB::table('orders')->insert([

            'customers_id' => 1,
            'products_id' => 1,
            'price' => random_int(1, 100000),
            'ship_address' => 'hà nội',
            'payment_method' => 'Thẻ ngân hàng',
            'created_at' => now(),

        ]);

        DB::table('orders')->insert([

            'customers_id' => 2,
            'products_id' => 2,
            'price' => random_int(1, 100000),
            'ship_address' => 'hà tây',
            'payment_method' => 'Momo',
            'created_at' => now(),

        ]);
        DB::table('orders')->insert([

            'customers_id' => 3,
            'products_id' => 3,
            'price' => random_int(1, 100000),
            'ship_address' => 'quảng nam',
            'payment_method' => 'ví điện tử ',
            'created_at' => now(),

        ]);
        DB::table('orders')->insert([

            'customers_id' => 4,
            'products_id' => 4,
            'price' => random_int(1, 100000),
            'ship_address' => 'hà nội',
            'payment_method' => 'Thẻ ngân hàng',
            'created_at' => now(),

        ]);
        DB::table('orders')->insert([

            'customers_id' => 5,
            'products_id' => 5,
            'price' => random_int(1, 100000),
            'ship_address' => 'hà nội',
            'payment_method' => 'Thẻ ngân hàng',
            'created_at' => now(),

        ]);
    }
}
