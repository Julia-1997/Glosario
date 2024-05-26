<x-layouts.app>


    <!--Titulo -->
    <x-slot name="title">
          Artículo
    </x-slot>

   <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="bi bi-bookmarks"> {{ $article->term}}</h2>
        <!-- <span class="badge rounded-pill bg-light text-dark border border-secondary"></span> -->
        <br>
        <br>
        <p class="p-3 my-1 border" id="definitionCSS"> {{ $article->definition}}</p>
        <hr>
        <p class="p-3 my-1"> {{ $article->description}}</p>
        <img class="img-fluid" src="{{ asset('images/perfil.jpg') }}" alt="Perfil" width="90%" height="80%">

        <hr>

            <div class="d-flex justify-content-between align-items-center w-100">
               <span>Sobre el artículo:</span>
            <div>
            <a href="{{ route('articulos.editar', $article->id) }}" class="btn btn-warning btn-sm bi bi-pencil-square"> Editar</a>
            <form action="{{ route('articulos.eliminar', $article->id) }}" method="post" class="d-inline">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm bi bi-trash-fill"> Eliminar</button>
                          </form>
            </div>
        </div>
        <br>
      </div>
   </div>
   </div>


   </x-layouts.app>