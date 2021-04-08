<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'khanh',
            'email' => 'khanhdang@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'duy',
            'email' => 'vanduy@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Phạm Quang linh',
            'email' => 'quanglinh@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'giang',
            'email' => 'truonggiang@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'tuc',
            'email' => 'vantuc@gmail.com',
            'password' => Hash::make('password'),
            'role' => 0,
            'created_at' => now(),
        ]);
    }
}
