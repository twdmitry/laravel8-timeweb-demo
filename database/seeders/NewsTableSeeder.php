<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('news')->insert([
            [
                'title' => 'Новость 1',
                'content' => 'В Москве отпраздновали день города',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Новость 2',
                'content' => 'Ставка рефинансирования опустилась до 1% годовых',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Новость 3',
                'content' => 'Новый год в 2024 году начинаем отмечать с 29 декабря',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Новость 4',
                'content' => 'Ученые открыли холодный синтез',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

