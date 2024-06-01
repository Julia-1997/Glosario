<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'category_id' => 1,
                'article_id' => 1,
            ],
            [
                'category_id' => 2,
                'article_id' => 1,
            ],
            [
                'category_id' => 3,
                'article_id' => 1,
            ],
            [
                'category_id' => 4,
                'article_id' => 1,
            ],
            [
                'category_id' => 5,
                'article_id' => 1,
            ],
            [
                'category_id' => 1,
                'article_id' => 2,
            ],
            [
                'category_id' => 2,
                'article_id' => 2,
            ],
            [
                'category_id' => 3,
                'article_id' => 2,
            ],
            [
                'category_id' => 4,
                'article_id' => 2,
            ],
            [
                'category_id' => 1,
                'article_id' => 3,
            ],
            [
                'category_id' => 3,
                'article_id' => 3,
            ],
            [
                'category_id' => 1,
                'article_id' => 5,
            ],
            [
                'category_id' => 2,
                'article_id' => 5,
            ],
            [
                'category_id' => 3,
                'article_id' => 5,
            ],
            [
                'category_id' => 4,
                'article_id' => 5,
            ],
            [
                'category_id' => 1,
                'article_id' => 6,
            ],
            [
                'category_id' => 2,
                'article_id' => 6,
            ],
            [
                'category_id' => 3,
                'article_id' => 6,
            ],
            [
                'category_id' => 4,
                'article_id' => 6,
            ],
            [
                'category_id' => 5,
                'article_id' => 6,
            ],
            [
                'category_id' => 1,
                'article_id' => 7,
            ],
            [
                'category_id' => 4,
                'article_id' => 7,
            ],
            [
                'category_id' => 1,
                'article_id' => 8,
            ],
            [
                'category_id' => 2,
                'article_id' => 8,
            ],
            [
                'category_id' => 3,
                'article_id' => 8,
            ],
            [
                'category_id' => 4,
                'article_id' => 8,
            ],
            [
                'category_id' => 5,
                'article_id' => 8,
            ],
            
        ];

        DB::table('article_category')->insert($data);
    }
}
