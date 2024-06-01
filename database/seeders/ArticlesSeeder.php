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
            [
                'term' => 'API',
                'definition' => 'Interfaz de aplicaciones que conecta el Frontend y el Backend y que va conectada con una base de datos.',
                'description' => '<mark> Frontend: parte cliente que consume la API y que tiene como reto que el programa funcione en todos los navegadores.
                <mark> Backend: parte servidor que crea la API y que tiene como reto mantener la seguridad y el rendimiento del programa.',
                'meaning' => null,
                'example' => null,
                'more_information' => null,
                'reference_id' => 1,
                'image_id' => 2,
            ],

            [
                'term' => 'PHP',
                'definition' => 'Lenguaje de programación interpretado de código abierto.',
                'description' => '<mark> El cliente envía una petición al servidor.
                <mark> El servidor web recibe la petición y comienza a buscar la página para poder acceder a ella.
                <mark> El lenguaje se procesa y el servidor ejecuta el código PHP.
                <mark> El usuario recibe la página web en formato HTML y la visualiza desde su navegador.',
                'meaning' => null,
                'example' => ' <?php phphinfo(); ?>',
                'more_information' => 'Documentación oficial: https://www.php.net',
                'reference_id' => 1,
                'image_id' => 3,
            ],

            [
                'term' => 'Página web',
                'definition' => 'Documento que se visualiza desde un navegador en Internet y que contiene datos que se muestran a un usuario. ',
                'description' => '<mark> Los programas en este lenguaje se llaman scripts y se pueden escribir directamente en el HTML de una página web y ejecutarse automáticamente a medida que se carga la página.',
                'meaning' => null,
                'example' => null,
                'more_information' => null,
                'reference_id' => 1,
                'image_id' => 1,
            ],
            [
                'term' => 'Algoritmo',
                'definition' => 'Secuencia de instrucciones que soluciona una serie de problemáticas.',
                'description' => '<mark> Diagrama de flujo: representación gráfica de un algoritmo.
                <mark> Pseudocódigo: representación escrita de un algoritmo.',
                'meaning' => null,
                'example' => 'Ejemplo de pseudocódigo -----> mostrar un mensaje al usuario para pedirle 2 números, comprobar que el usuario ha introducido 2 números, sumar los 2 números y enseñar el resultado al usuario.',
                'more_information' => null,
                'reference_id' => 1,
                'image_id' => 4,
            ],
            [
                'term' => 'Función',
                'definition' => 'Forma de encapsular un conjunto de instrucciones dentro de una declaración específica.',
                'description' => '<mark> Función anónima: función cerrada que puede ser declarada sin nombre y que se utiliza cuando se pasa una función como un parámetro de otra.
                <mark> Función tipada: función que especifica el tipo de dato que la función puede recibir como argumento o devolver.
                <mark> Función por expresión: función que está guardada en una variable.
                <mark> Función flecha: función definida en un formato más simplificado. 
                ',
                'meaning' => null,
                'example' => 'Ejemplo código JavaScript ----->
                function saludar(){
                    return "Hola";
                }
                
                saludar(); // llamada a la función
                '
                ,
                'more_information' => null,
                'reference_id' => 1,
                'image_id' => 1,
            ],
            [
                'term' => 'JavaScript',
                'definition' => 'Lenguaje de programación interpretado basado en la especificación homologada ECMAScript.',
                'description' => '<mark> Función anónima: función cerrada que puede ser declarada sin nombre y que se utiliza cuando se pasa una función como un parámetro de otra.
                <mark> Función tipada: función que especifica el tipo de dato que la función puede recibir como argumento o devolver.
                <mark> Función por expresión: función que está guardada en una variable.
                <mark> Función flecha: función definida en un formato más simplificado. 
                ',
                'meaning' => null,
                'example' => 'Ejemplo código JavaScript ----->
                <html>
                <body>
                
                  <p>Antes del script...</p>
                
                  <script>
                    alert( "¡Hola, mundo!" );
                  </script>
                
                  <p>...Después del script.</p>
                
                </body>
                </html>
                '
                ,
                'more_information' => 'Las páginas webs están en un servidor de páginas webs (Apache, IIS). Al HTML se le añade un lenguaje de programación que tiene la capacidad de conectarse a una base de datos, mostrar la información…
                ',
                'reference_id' => 1,
                'image_id' => 5,
            ],
            [
                'term' => 'Condicionales',
                'definition' => 'Estructuras o bloque de código que sirve para ejecutar una serie de instrucciones dependiendo de una determinada condición.',
                'description' => '<mark> Condicional simple: el código se ejecuta solamente si la condición se cumple.
                <mark> Condicional doble: el código se ejecuta para especificar una nueva condición para probar, si la primera es falsa.
                <mark> Condicional múltiple: se evalúa una expresión (un valor concreto) no una condición (verdadero o falso). 
                ',
                'meaning' => null,
                'example' => 'Ejemplo código JavaScript ----->
                if(edad==26){
                    console.log("Ya estás mayor");
                }
                '
                ,
                'more_information' => null,
                'reference_id' => 1,
                'image_id' => 6,
            ],


        ];

        DB::table('articles')->insert($data);
    }
}
