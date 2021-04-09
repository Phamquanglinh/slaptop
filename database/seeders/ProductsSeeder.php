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

                'name'=>'Asus Zenbook 14 Q407IQ (Ryzen 5 - 4500U, 8GB, 256B, VGA NVIDIA MX350, 14.0 FHD)',
                'price'=>18490000,
                'old_price'=>19890000,
                'quantity'=>50,
                'cover_image'=>'https://laptopaz.vn/media/lib/1761_71jVnEQUFXL._AC_SL1500_.jpg',
                'rate'=>5,
                'category_id'=>3, //Laptop Văn phòng
                'brand_id'=>2,
                'user_id'=>random_int(1,5),
                'describe'=>Str::random('200'),
                'specifications'=>Str::random('200'),
                'details'=>Str::random('200'),
                'slug'=>Str::slug('Asus Zenbook 14 Q407IQ (Ryzen 5 - 4500U, 8GB, 256B, VGA NVIDIA MX350, 14.0 FHD)','-').'.aspx',
                'created_at'=>now(),

            ]);

        DB::table('products')->insert([

            'name'=>'HP Pavilion Gaming 15-dk1086TX 206R3PA',
            'price'=>27690000,
            'old_price'=>28990000,
            'quantity'=>30,
            'cover_image'=>'https://laptopworld.vn/media/product/7291_6373_hp_pavilion_gaming_15_6.jpg',
            'rate'=>5,
            'category_id'=>4, //Laptop Gaming
            'brand_id'=>1, //HP
            'user_id'=>random_int(1,5),
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>Str::slug('HP Pavilion Gaming 15-dk1086TX 206R3PA','-').'.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'Dell Precision 7550/ Core i7 10850H/ RAM 16 GB/ SSD 512 GB/ Quadro T1000/ FHD',
            'price'=>45500000,
            'old_price'=>5290000,
            'quantity'=>12,
            'cover_image'=>'https://saigonkts.com/wp-content/uploads/2020/08/dell-precision-7550-saigonkts.jpg',
            'rate'=>5,
            'category_id'=>4, //Laptop Gaming
            'brand_id'=>3, //Dell
            'user_id'=>random_int(1,5),
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>Str::slug('HP Pavilion Gaming 15-dk1086TX 206R3PA','-').'.aspx',
            'created_at'=>now(),

        ]);

        DB::table('products')->insert([

            'name'=>'Vsmart Joy 4',
            'price'=>2990000,
            'old_price'=>3290000,
            'quantity'=>21,
            'cover_image'=>'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/v/s/vsmart-joy-4_2_.png',
            'rate'=>5,
            'category_id'=>5, //Android
            'brand_id'=>5, //Vsmart
            'user_id'=>random_int(1,5),
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>Str::slug('Vsmart Joy 4','-').'.aspx',
            'created_at'=>now(),

        ]);
        DB::table('products')->insert([

            'name'=>'iPhone 12 I Chính hãng VN/A 64GB ',
            'price'=>20300000,
            'old_price'=>24990000,
            'quantity'=>21,
            'cover_image'=>'https://cdn.cellphones.com.vn/media/catalog/product/cache/7/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12_2__3.jpg',
            'rate'=>5,
            'category_id'=>6, //Android
            'brand_id'=>6, //Vsmart
            'user_id'=>random_int(1,5),
            'describe'=>Str::random('200'),
            'specifications'=>Str::random('200'),
            'details'=>Str::random('200'),
            'slug'=>Str::slug('iPhone 12 I Chính hãng VN/A 64GB','-').'.aspx',
            'created_at'=>now(),

        ]);



    }
}
