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
        $count=5;
        for ($i=0;$i<$count;$i++){
            DB::table('brands')->insert([
                'name'=>Str::random(5),
                'logo'=>Str::random(10).'png',
                'cover_image'=>Str::random(10).'.png',
                'slug'=>Str::random('5'),
                'created_at'=>now(),
            ]);
        }
    }
}
