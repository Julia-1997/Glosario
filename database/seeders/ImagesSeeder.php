<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => 'defecto.jpg',
            ],
            [
                'url' => 'API.png',
            ],
            [
                'url' => 'PHP.png',
            ],
            [
                'url' => 'algoritmo.png',
            ],
            [
                'url' => 'JavaScript.png',
            ],
            [
                'url' => 'Condicionales.png',
            ],
        ];

        DB::table('images')->insert($data);
    }
}
