<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            UsersSeeder::class,
            BrandsSeeder::class,
            CategoriesSeeder::class,
            ProductsSeeder::class,
            CustomersSeeder::class,
            OrdersSeeder::class,
            TagsSeeder::class,
            PivotSeeder::class,
        ]);
    }
}
