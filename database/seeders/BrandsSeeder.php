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
            'name' => 'microsoft',
            'logo' => 'logo.png',
            'cover_image' => 'cover-img.png',
            'slug' => 'microsoft.aspx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'asus',
            'logo' => 'logo.png',
            'cover_image' => 'cover-img.png',
            'slug' => 'asus.apsx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'hp',
            'logo' => 'logo.png',
            'cover_image' => 'cover-img.png',
            'slug' => 'hp.aspx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'dell',
            'logo' => 'logo.png',
            'cover_image' => 'cover-img.png',
            'slug' => 'dell.aspx',
            'created_at' => now(),
        ]);

        DB::table('brands')->insert([
            'name' => 'mac',
            'logo' => 'logo.png',
            'cover_image' => 'cover-img.png',
            'slug' => 'mac.aspx',
            'created_at' => now(),
        ]);
    }
}
