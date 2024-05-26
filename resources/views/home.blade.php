<x-layouts.app>


    <!--Titulo -->
    <x-slot name="title">
          Página principal
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-5">
            <h2> Sobre mí</h2>
            <img class="img-fluid" src="{{ asset('images/perfil.jpg') }}" alt="Perfil" width="90%" height="80%">
            <p>Filóloga, lingüista y desarrolladora web junior | Java, JavaScript, PHP, SQL, Angular, Laravel </p>
            <p>Me llamo Julia, soy graduada en Lengua y Literatura Española y actualmente estoy cursando el grado superior de desarrollo de aplicaciones web. Soy una persona muy trabajadora, constante y responsable. Tengo una gran facilidad para trabajar en equipo y he participado en numerosos proyectos en el transcurso de mi formación educativa.</p>

            <hr class="d-sm-none">
            </div>
            <!--Descripción del proyecto-->
        <div class="col-sm-7">
          <h2>Glosario</h2>
          <h5>Creado con Laravel 10 y Bootrstrap 5</h5>
          <h6>-- Mayo, 2024</h6>
            <p>Proyecto personal en el que se presenta un glosario sobre los términos aprendidos en el grado superior de desarrollo web.</p>
            <ul>
              <li><b>Términos:</b> vista que muestra todos los términos y definiciones de la base de datos. Se pueden filtrar los resultados que se muestran por letra del abecedario y ver los detalles de cada artículo.</li>
              <li><b>Ver detalles:</b> vista que muestra toda la información disponible sobre un artículo concreto. Además permite editar el artículo y borrarlo.</li>
              <li><b>Añadir un término:</b> vista que muestra un formulario para añadir un artículo.</li>

            </ul>
      </div>
  </div>
</div>



   </x-layouts.app>