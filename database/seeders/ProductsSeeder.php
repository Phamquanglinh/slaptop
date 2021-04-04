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
            DB::table('products')->insert([

                'name'=>'Iphone 12',
                'price'=>random_int(1,100000),
                'old_price'=>random_int(1,100000),
                'quantity'=>random_int(1,10),
                'cover_image'=>'cover-img.png',
                'logo'=>'logo.png',
                'rate'=>random_int(1,5),
                'category_id'=>1,
                'brand_id'=>1,
                'user_id'=>1,
                'describe'=>Str::random('200'),
                'specifications'=>Str::random('200'),
                'details'=>Str::random('200'),
                'slug'=>'iphone-12.aspx',
                'created_at'=>now(),

            ]);

        DB::table('products')->insert([

            'name'=>'Macbook Air Pro',
            'price'=>random_int(1,100000),
            'old_price'=>random_int(1,100000),
            'quantity'=>random_int(1,10),
            'cover_image'=>'cover-img.png',
            'logo'=>'logo.png',
            'rate'=>random_int(1,5),
            'category_id'=>2,
            'brand_id'=>2,
            'user_id'=>2,
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>'Macbook-Air-Pro.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'Htc One M8',
            'price'=>random_int(1,100000),
            'old_price'=>random_int(1,100000),
            'quantity'=>random_int(1,10),
            'cover_image'=>'cover-img.png',
            'logo'=>'logo.png',
            'rate'=>random_int(1,5),
            'category_id'=>3,
            'brand_id'=>3,
            'user_id'=>3,
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>'Htc-One-M8.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'RealMe 8',
            'price'=>random_int(1,100000),
            'old_price'=>random_int(1,100000),
            'quantity'=>random_int(1,10),
            'cover_image'=>'cover-img.png',
            'logo'=>'logo.png',
            'rate'=>random_int(1,5),
            'category_id'=>4,
            'brand_id'=>4,
            'user_id'=>4,
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>'RealMe-8.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'Asus SML 8888',
            'price'=>random_int(1,100000),
            'old_price'=>random_int(1,100000),
            'quantity'=>random_int(1,10),
            'cover_image'=>'cover-img.png',
            'logo'=>'logo.png',
            'rate'=>random_int(1,5),
            'category_id'=>5,
            'brand_id'=>5,
            'user_id'=>5,
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>'Asus-SML-8888.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'RealMe 10',
            'price'=>random_int(1,100000),
            'old_price'=>random_int(1,100000),
            'quantity'=>random_int(1,10),
            'cover_image'=>'cover-img.png',
            'logo'=>'logo.png',
            'rate'=>random_int(1,5),
            'category_id'=>4,
            'brand_id'=>4,
            'user_id'=>4,
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>'RealMe-8.aspx',
            'created_at'=>now(),

        ]);

    }
}
