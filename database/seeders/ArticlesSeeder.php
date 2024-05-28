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
                'term' => 'Variable',
                'definition' => 'Espacio de memoria que sirve para guardar, recuperar y manipular datos o valores.',
                'description' => '<mark> Variable local: variable declarada dentro de una función que sólo es visible dentro de ella.
                <mark> Variable global: variable declarada fuera de una función que es visible desde cualquier función.',
                'meaning' => '',
                'example' => 'Ejemplo código PHP ----->
                function saludar()
                    {
                        $saludo = "Hola";
                        print $saludo. "<br>";
                    }

                    $saludo = "Buenos dias";
                    echo "Variable local: ";
                    saludar(); // Devuelve: Hola
                    echo "Variable global: ";
                    print $saludo; // Devuelve: Buenos días',
                'more_information' => 'En la memoria RAM, cuando se ejecuta un programa, hay un espacio que es global y otro que es local.',
                'reference_id' => 1,
                'image_id' => 1,
            ],
        ];

        DB::table('articles')->insert($data);
    }
}
