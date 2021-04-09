<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'name' => 'HP',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/HP_logo_2012.svg/1200px-HP_logo_2012.svg.png',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'hp.aspx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'Asus',
            'logo' => 'https://i.pinimg.com/originals/80/3e/df/803edf9669cc4a8a3d180d582def8217.png',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'asus.apsx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'Dell',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/Dell_Logo.svg/1200px-Dell_Logo.svg.png',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'dell.aspx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'XiaoMi',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Xiaomi_logo.svg/1024px-Xiaomi_logo.svg.png',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'xiaomi.aspx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'VSmart',
            'logo' => 'https://upload.wikimedia.org/wikipedia/vi/d/da/Vsmart-logo.jpg',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'vsmart.aspx',
            'created_at' => now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'Apple',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'iphone.aspx',
            'created_at' => now(),
        ]);
    }
}
