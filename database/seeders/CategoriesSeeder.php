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

        DB::table('categories')->insert([
            'name' => 'Laptop Đồ Họa',
            'cover_image' => 'https://laptop88.vn/media/news/1203_laptoplamdohoa3d2.png',
            'parent_id'=>1,
            'slug' => 'lap-top-do-hoa.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Laptop Lập Trình',
            'cover_image' => 'https://hunganh.vn/cdn/upload/images/laptop-danh-cho-dan-lap-trinh.jpg',
            'parent_id'=>1,
            'slug' => 'lap-top-lap-trinh.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Phụ kiện',
            'cover_image' => 'https://suachualaptop24h.com/uploads/Tintuc2/linhkienlaptopgiare.jpg',
            'parent_id'=>null,
            'slug' => 'phu-kien.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Sạc',
            'cover_image' => 'https://huaweiviet.vn/wp-content/uploads/2019/05/cap-sac-huawei-nova-3i-chinh-hang.gif',
            'parent_id'=>9,
            'slug' => 'sac.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Tai nghe',
            'cover_image' => 'https://cdn.tgdd.vn/Products/Images/54/187374/tai-nghe-bluetooth-kanen-k6-den-2-org.jpg',
            'parent_id'=>9,
            'slug' => 'tai-nghe.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Loa',
            'cover_image' => 'https://antuan.vn/wp-content/uploads/2020/07/loa-bluetooth-LG-Xboom-Go-PL7-1.jpg',
            'parent_id'=>9,
            'slug' => 'loa.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Chuột máy tính',
            'cover_image' => 'https://product.hstatic.net/1000379362/product/chuot_logitech_2_2ce23484871d443caaaf9aae01d75cd4.jpg',
            'parent_id'=>9,
            'slug' => 'chuot-may-tinh.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Window Phone',
            'cover_image' => 'https://cdn.viettelstore.vn/images/vtimages/c1/81/0e/c1810eeb2cfc43269b526a54710e02a9_VaiO-SmartPhone-ViettelStore.jpg',
            'parent_id'=>2,
            'slug' => 'window-phone.aspx',
            'created_at' => now(),
        ]);

        DB::table('categories')->insert([
            'name' => 'Black Berry',
            'cover_image' => 'http://bizweb.dktcdn.net/100/318/073/files/blackberry-2019-06-03-21-27-16.jpg?v=1559572108661',
            'parent_id'=>2,
            'slug' => 'black-berry.aspx',
            'created_at' => now(),
        ]);
    }
}
