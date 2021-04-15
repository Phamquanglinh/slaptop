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
            'name' => 'Lenovo',
            'logo' => 'data:image/png;base64,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',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'lenovo.aspx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'thinkpad',
            'logo' => 'https://seeklogo.net/wp-content/uploads/2014/11/thinkpad-logo-vector-download.jpg',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'thinkpad.aspx',
            'created_at' => now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'lg',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/LG_logo_%282015%29.svg/800px-LG_logo_%282015%29.svg.png',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'lg.aspx',
            'created_at' => now(),
        ]);
        DB::table('brands')->insert([
            'name' => 'msi',
            'logo' => 'https://upload.wikimedia.org/wikipedia/vi/archive/6/6c/20201107090148%21Msi_logo.png',
            'cover_image' => 'https://cdn.pixabay.com/photo/2020/04/12/20/37/abstract-5035778_960_720.jpg',
            'slug' => 'lg.aspx',
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
