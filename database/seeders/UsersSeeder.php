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
        $count=5;
        for ($i=0;$i<$count;$i++){
            DB::table('users')->insert([
                'name'=>Str::random(5),
                'email'=>Str::random(10).'@gmail.com',
                'password'=>Hash::make('password'),
                'created_at'=>now(),
            ]);
        }

    }
}
