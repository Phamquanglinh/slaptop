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
        $count=5;
        for ($i=1;$i<=$count;$i++){
            DB::table('customers')->insert([

                'number_phone'=>random_int(1,1000000000),
                'address'=>Str::random(10).'-'.Str::random(10),
                'user_id'=>$i,
                'created_at'=>now(),

            ]);
        }

    }
}
