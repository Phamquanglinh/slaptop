<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([

            'number_phone' => '0562201674',
            'address' => 'hà nội',
            'user_id' => 1,
            'created_at' => now(),

        ]);

        DB::table('customers')->insert([

            'number_phone' => '0562201674',
            'address' => 'hà nội',
            'user_id' => 2,
            'created_at' => now(),

        ]);

        DB::table('customers')->insert([

            'number_phone' => '0562201675',
            'address' => 'quảng ninh',
            'user_id' => 3,
            'created_at' => now(),

        ]);

        DB::table('customers')->insert([

            'number_phone' => '0562201676',
            'address' => 'ninh bình',
            'user_id' => 4,
            'created_at' => now(),

        ]);

        DB::table('customers')->insert([

            'number_phone' => '0562201677',
            'address' => 'quảng nam',
            'user_id' => 5,
            'created_at' => now(),

        ]);

    }
}
