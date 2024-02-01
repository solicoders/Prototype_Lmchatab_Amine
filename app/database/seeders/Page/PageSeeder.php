<?php

namespace Database\Seeders\Page;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_key' => 'http://localhost',
                'page_title' => 'Home',
                'reference' => 'Reference 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_key' => 'http://localhost/about',
                'page_title' => 'About',
                'reference' => 'Reference 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('page')->insert($pages);
    }
}
