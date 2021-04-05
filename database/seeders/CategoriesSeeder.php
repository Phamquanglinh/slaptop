<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Laptop',
            'cover_image' => 'https://laptopg7.vn/images/detailed/101/Surface-Laptop-3-Black-01-1571460746.jpg',
            'parent_id'=>null,
            'slug' => 'laptop.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Điện thoại',
            'cover_image' => 'https://hc.com.vn/i/ecommerce/media/GS.004214_FEATURE_63204.jpg',
            'parent_id'=>null,
            'slug' => 'dien-thoai.aspx',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Laptop Văn Phòng',
            'cover_image' => 'https://laptop88.vn/media/news/0201_dchdng.jpg',
            'parent_id'=>1,
            'slug' => 'laptop-van-phong.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Laptop Gaming',
            'cover_image' => 'https://laptopg7.vn/images/detailed/101/Asus-ROG-Strix-Hero-II--01-1574835010.jpg',
            'parent_id'=>1,
            'slug' => 'lap-top-gaming.aspx',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Android',
            'cover_image' => 'https://cdn.vox-cdn.com/thumbor/FuQgMA9rH-hYrDiSIfgaWvb6ybM=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/13272937/jbareham_181012_2989_0549.jpg',
            'parent_id'=>2,
            'slug' => 'android.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Iphone',
            'cover_image' => 'https://cdn.tgdd.vn/Products/Images/42/228736/iphone-12-128gb-195820-105824-600x600.jpg',
            'parent_id'=>2,
            'slug' => 'android.aspx',
            'created_at' => now(),
        ]);

    }
}
