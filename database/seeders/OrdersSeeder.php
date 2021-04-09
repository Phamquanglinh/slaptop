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

            'customers' => 'Trần Gia Hào',
            'products' => '1:4-2:5-3:4',
            'total' => 49990000,
            'ship_address' => 'Nam Từ Liêm - Hà Nội',
            'status' => 0,
            'payment_method' => 'Nhận hàng thanh toán',
            'created_at' => now(),

        ]);
        DB::table('orders')->insert([

            'customers' => 'Trần Thị Minh',
            'products' => '1:4-2:5-3:4',
            'total' => 49990000,
            'ship_address' => 'Thanh Xuân - Hà Nội',
            'status' => 3,
            'payment_method' => 'Nhận hàng thanh toán',
            'created_at' => now(),

        ]);
    }
}
