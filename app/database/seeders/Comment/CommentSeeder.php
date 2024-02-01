<?php

namespace Database\Seeders\Comment;

use App\Models\Page\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = Page::take(2)->latest()->get();

        $comments = [];

        foreach ($pages as $page) {
            $comments[] = [
                'comment' => 'This is a sample comment for ' . $page->page_title,
                'reference' => 'reference',
                'created_at' => now(),
                'updated_at' => now(),
                'page_id' => $page->id,
            ];
        }
        DB::table('comment')->insert($comments);
    }
}
