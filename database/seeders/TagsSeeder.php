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
        $count=5;
        for ($i=0;$i<$count;$i++){
            DB::table('tags')->insert([
                'name'=>Str::random(5),
                'slug'=>Str::random('5'),
                'created_at'=>now(),
            ]);
        }
    }
}
