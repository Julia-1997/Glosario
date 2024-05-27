<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Mis apuntes',
                'author' => 'Julia',
                'date' => '2024-5-25',
                'link' => 'No disponible',

            ],
        ];

        DB::table('references')->insert($data);
    }
}
