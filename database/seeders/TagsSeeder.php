<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tags')->insert([
            'name' => 'điện thoại hỏng',
            'slug' => 'điện thoại hỏng.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'điện thoại cũ',
            'slug' => 'điện thoại cũ.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'điện thoại vỡ',
            'slug' => 'điện thoại vỡ.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'điện thoại cháy',
            'slug' => 'điện thoại cháy.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'điện thoại fa',
            'slug' => 'điện thoại fa.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'điện thoại alone',
            'slug' => 'điện thoại alone.aspx',
            'created_at' => now(),
        ]);

    }
}
