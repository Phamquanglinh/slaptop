<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        DB::table('pivot')->insert([

            'product_id'=>1,
            'tag_id'=>2,

        ]);

        DB::table('pivot')->insert([

            'product_id'=>3,
            'tag_id'=>1,

        ]);

        DB::table('pivot')->insert([

            'product_id'=>1,
            'tag_id'=>3,

        ]);

        DB::table('pivot')->insert([

            'product_id'=>3,
            'tag_id'=>3,

        ]);

        DB::table('pivot')->insert([

            'product_id'=>4,
            'tag_id'=>2,

        ]);

        DB::table('pivot')->insert([

            'product_id'=>5,
            'tag_id'=>1,

        ]);

       for($i=1;$i<=40;$i++){
           DB::table('pivot')->insert([

               'product_id'=>random_int(1,30),
               'tag_id'=>random_int(1,8),

           ]);
       }
    }
}
