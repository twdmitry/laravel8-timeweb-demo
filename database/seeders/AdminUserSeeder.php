<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'Admin 2',
            'email' => 'admin2@example.com',
            'password' => Hash::make('aaa123654AAA'),
            'is_admin' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'somrup@yandex.ru',
            'password' => Hash::make('golubev'),
            'is_admin' => 1,
        ]);
    }
}
