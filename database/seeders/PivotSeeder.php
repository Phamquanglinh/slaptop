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
    }
}
