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
            'cover_image' => 'cover-img.png',
            'parent_id'=>null,
            'slug' => 'Laptop.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Phone',
            'cover_image' => 'cover-img.png',
            'parent_id'=>1,
            'slug' => 'Phone.aspx',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Macbook',
            'cover_image' => 'cover-img.png',
            'parent_id'=>2,
            'slug' => 'Macbook.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Pc',
            'cover_image' => 'cover-img.png',
            'parent_id'=>1,
            'slug' => 'Pc.aspx',
            'created_at' => now(),
        ]);
        DB::table('categories')->insert([
            'name' => 'Tablet',
            'cover_image' => 'cover-img.png',
            'parent_id'=>1,
            'slug' => 'Tablet.aspx',
            'created_at' => now(),
        ]);

    }
}
