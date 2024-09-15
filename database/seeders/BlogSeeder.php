<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('BLOGS')->insert(
            [
                [
                    'title' => 'テスト1',
                    'text' => 'テスト本文1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'テスト2',
                    'text' => 'テスト本文2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'title' => 'テスト3',
                    'text' => 'テスト本文3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                ]
            );
    }
}
