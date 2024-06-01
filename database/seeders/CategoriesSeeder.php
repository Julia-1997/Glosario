<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Lenguajes de programación',
            ],
            [
                'name' => 'Java',
            ],
            [
                'name' => 'PHP',
            ],
            [
                'name' => 'JavaScript',
            ],
            [
                'name' => 'Base de datos',
            ],
            [
                'name' => 'Sistemas informáticos',
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
