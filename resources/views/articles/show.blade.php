<x-layouts.app>


    <!--Titulo -->
    <x-slot name="title">
          Artículo
    </x-slot>

   <div class="container mt-5">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="bi bi-bookmarks"> {{ $article->term}}</h2>
          <!--Mostrar categorías en formato span-->
        @foreach($article->categoria as $category)
                 <span class="badge rounded-pill bg-light text-dark border border-secondary">{{ $category->name }}</span>
        @endforeach

        <br>
        <br>
        <p class="p-3 my-1 border" id="definitionCSS"> {{ $article->definition}}</p>
        <hr>
        <p class="p-3 my-1"> 
            <ul>
              <!--Si en la descripción hay una etiqueta mark que se liste el contenido-->
            @foreach(explode("<mark>", $article->description) as $line)
            @if (!$loop->first) <!--Eliminar primer listado que aparece vacío-->
                <li>{{ $line }}</li> 
            @endif
        @endforeach
            </ul>
        </p>
        <p class="mt-4 p-5 bg-muted rounded border"><code>{{ $article->example}}</code></p>
        <p class="p-3 my-1"> {{ $article->more_information}}</p>
        
        <img class="img-fluid" src="{{ asset('images/' . $article->imagen->url) }}" alt="{{$article->imagen->url}}" width="70%" height="70%">
        <p class="p-3 my-1"> {{ $article->meaning}}</p>
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