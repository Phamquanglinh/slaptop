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
            'slug' => Str::slug('Sản phẩm giảm giá', '-') . '.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Sản phẩm cao cấp',
            'slug' => Str::slug('Sản phẩm cao cấp', '-') . '.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Số lượng có hạn',
            'slug' => Str::slug('số lượng có hạn', '-') . '.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Sản phẩm trả góp',
            'slug' => Str::slug('Sản phẩm trả góp', '-') . '.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Phù hợp cho sinh viên',
            'slug' => Str::slug('Phù hợp cho sinh viên', '-') . '.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Phù hợp cho người đi làm',
            'slug' => Str::slug('Phù hợp cho người đi làm', '-') . '.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'sản phẩm mới',
            'slug' => Str::slug('sản phẩm mới', '-') . '.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'sản phẩm cũ',
            'slug' => Str::slug('sản phẩm cũ', '-') . '.aspx',
            'created_at' => now(),
        ]);

        DB::table('tags')->insert([
            'name' => 'Sản phẩm tầm trung',
            'slug' => Str::slug('sản phẩm tầm trung', '-') . '.aspx',
            'created_at' => now(),
        ]);

        DB::table('tags')->insert([
            'name' => 'sản phẩm dành cho người khuyết tật',
            'slug' => Str::slug('sản phẩm dành cho người khuyết tật', '-') . '.aspx',
            'created_at' => now(),
        ]);

        DB::table('tags')->insert([
            'name' => 'phụ kiện thông minh',
            'slug' => Str::slug('phụ kiện thông minh','-').'.aspx',
            'created_at' => now(),
        ]);
        DB::table('tags')->insert([
            'name' => 'Phụ kiện cổ điển',
            'slug' => Str::slug('Phụ kiện cổ điển','-').'.aspx',
            'created_at' => now(),
        ]);


    }
}
