<x-layouts.app>


    <!--Titulo -->
    <x-slot name="title">
          Lista de categorías
    </x-slot>



    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
            <!--Listado de categorías-->
            <h2>Categorías</h2>
            <ul class="list-group">
    @foreach ($categories as $category)
        <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
            {{$category->name}}
            <div>
                <form action="{{ route('categorias.eliminar', $category->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm bi bi-trash-fill"> Eliminar</button>
                </form>
            </div>
        </li>
        <br>
    @endforeach
</ul> 
  
            </div>
            <!--Formulario añadir categoría-->
        <div class="col-sm-6">
        <h2 class="bi bi-bookmark-plus-fill"> Añadir categoría</h2>
        <form action="{{ route('categorias.store') }}" method="post">
             @csrf
             <div class="form-group">
               <label for="name">Nombre</label>
               <input type="text" class="form-control" id="name" name="name" required>
             </div>
             <br>
               <!-- Posibles errores -->
        @if ($errors->any())
                       <div class="alert alert-danger">
                           <ul>
                               @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                               @endforeach
                           </ul>
                       </div>
                   @endif
  <button type="submit" class="btn btn-success bi bi-journal-plus"> Añadir</button>
           </form>


        @if (session('success'))
            <div class="bi bi-journal-check alert alert-success">
                {{ session('success') }}
            </div>
        @endif
      </div>
  </div>
</div>



   </x-layouts.app>
