<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- uso de bootstrap -->
    @vite(['resources/js/app.js']) 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{$title?? 'Glosario'}}</title>
</head>
<body>
    <div class="container-fluid">
        <section id="page-container">
            <!--Banner -->
            <div class="p-5 bg-dark text-white text-center">
                <h1>Glosario del desarrollador junior</h1>
            </div>

            <!--Menú-->
        <x-layouts.navigation />

        <!-- contenido dinámico  -->
            <div id="content-wrap">
                {{$slot}}
            </div>

        <!--Footer-->
        <footer id="footer">
            <x-layouts.footer />
        </footer>
        <section>
    </div>
</body>
</html>
