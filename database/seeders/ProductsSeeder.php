<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        $count=5;
        for ($i=1;$i<=$count;$i++){
            DB::table('products')->insert([

                'name'=>Str::random(10),
                'price'=>random_int(1,100000),
                'old_price'=>random_int(1,100000),
                'quantity'=>random_int(1,100000),
                'cover_image'=>Str::random(10).'.png',
                'logo'=>Str::random(10).'.png',
                'rate'=>random_int(1,5),
                'category_id'=>$i,
                'brand_id'=>$i,
                'user_id'=>$i,
                'describe'=>Str::random('200'),
                'specifications'=>Str::random('200'),
                'details'=>Str::random('200'),
                'slug'=>Str::random('5'),
                'created_at'=>now(),

            ]);
        }

    }
}
