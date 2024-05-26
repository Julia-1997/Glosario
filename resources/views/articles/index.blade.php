<x-layouts.app>


    <!--Titulo -->
    <x-slot name="title">
          Lista de artículos
    </x-slot>



    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
            <!--Filtros de búsqueda-->
            <h2>Buscar por letra</h2>
            @foreach(array_chunk(range('A', 'Z'), 3) as $chunk)
                <div class="row">
                    @foreach($chunk as $letter)
                    <a id="letter-button" class="col-3 col-md-3 d-inline text-center" href="{{ route('articles.filter', $letter) }}">{{ $letter }}</a>
                    @endforeach
                </div>
            @endforeach

            <hr class="d-sm-none">
            </div>
            <!--Tabla con los términos-->
        <div class="col-sm-8">
          <h2>Listado de terminos</h2>
          <table class="table">
          @if($articles->isEmpty())
          <div class="alert alert-secondary">
         No hay términos que empiecen con la letra seleccionada <a href="{{ route('articulos.index') }}" class="alert-link">volver al listado</a>.
            </div>
        @else
            <thead>
                <tr>
                    <th>Término</th>
                    <th>Definición</th>
                    <th>Más información</th>
                </tr>
            </thead>
                      @foreach ($articles as $article)
            <tbody>
                <tr>
                    <td>
                        {{ $article->term}}
                    </td>
                    <td>
                        {{ $article->definition}}
                    </td>
                    <td>
                        <a href="{{ route('articulos.detalles', $article->id) }}" class="btn btn-dark btn-sm bi bi-info-circle"> Detalles</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            @endif
        </table>

        {{ $articles->links() }}
        @if (session('success'))
            <div class="bi bi-journal-check alert alert-success">
                {{ session('success') }}
            </div>
        @endif
      </div>
  </div>
</div>



   </x-layouts.app>
