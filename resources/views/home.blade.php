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
            <p>Filóloga y desarrolladora web junior | Java, JavaScript, PHP, SQL, Angular, Laravel </p>
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
              <li><b>Términos:</b> Vista que muestra todos los términos y definiciones almacenados en la base de datos. Los usuarios pueden filtrar los resultados por letra del abecedario y acceder a los detalles completos de cada término.</li>
              <li><b>Ver detalles:</b> Esta vista ofrece información detallada sobre un término específico. Incluye opciones para editar el término existente o eliminarlo completamente de la base de datos.</li>
              <li><b>Modificar un término:</b> Vista que proporciona un formulario con los datos de un término y su referencia para poder modificar un artículo.</li>
              <li><b>Eliminar un término:</b> Permite borrar un término de la base de datos.</li>
              <li><b>Añadir un término:</b> Proporciona un formulario fácil de usar para agregar nuevos términos a la base de datos.</li>
              <li><b>Categorías:</b> Vista que muestra todos las categorías almacenadas en la base de datos. Los usuarios pueden añadir y eliminar categorías</li>
              <li><b>Eliminar una categoría:</b> Permite borrar una categoría de la base de datos.</li>
              <li><b>Añadir una categoría:</b> Permite añadir una categoría de la base de datos.</li>
            </ul>
      </div>
  </div>
</div>



   </x-layouts.app>