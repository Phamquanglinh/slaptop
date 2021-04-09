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
            'name' => 'Sản phẩm giảm giá',
            'slug' => Str::slug('Sản phẩm giảm giá','-').'.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Sản phẩm cao cấp',
            'slug' => Str::slug('Sản phẩm cao cấp','-').'.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Số lượng có hạn',
            'slug' => Str::slug('Số lượng có hạn','-').'.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Phù hợp cho sinh viên',
            'slug' => Str::slug('Phù hợp cho sinh viên','-').'.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Phù hợp cho người đi làm',
            'slug' => Str::slug('Phù hợp cho người đi làm','-').'.aspx',
            'created_at' => now(),
        ]);

    }
}
