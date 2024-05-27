<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'term' => 'Parámetro',
                'definition' => 'Variable que aparece en la definición de una función',
                'description' => '',
                'meaning' => '',
                'example' => ' ex_código
                function nombre_de_funcion(tipo_de_parametro $parametros): tipo_return
                {
                ...
                return ...;
                } ',
                'more_information' => '',
                'reference_id' => 1,
                'image_id' => 1,
            ],
        ];

        DB::table('articles')->insert($data);
    }
}
