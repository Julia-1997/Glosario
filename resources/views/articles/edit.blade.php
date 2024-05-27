<x-layouts.app>


    <!--Titulo -->
    <x-slot name="title">
          Editar un término
    </x-slot>

    <div class="container mt-5">
        <div class="row">
        <h2 class="bi bi-journal-richtext"> Editar artículo</h2>
         <hr>
            <div class="col-sm-7">
            <form action="{{ route('articulos.update', $article->id) }}" method="post">
             @csrf
             @method('PUT')
             <div class="form-group">
               <label for="term">Término</label>
               <input type="text" class="form-control" id="term" name="term" value="{{ $article->term }}" required>
             </div>
             <br>
             <div class="form-group">
               <label for="definition">Definición</label>
               <textarea class="form-control" id="definition" name="definition" rows="3" required>{{ $article->definition }} </textarea>
             </div>
             <br>
             <div class="form-group">
               <label for="description">Descripción</label>
               <textarea class="form-control" id="description" name="description" rows="3">{{ $article->description }}</textarea>
             </div>
             <br>
             <div class="form-group">
               <label for="meaning">Acepción</label>
               <input type="text" class="form-control" id="meaning" name="meaning" value="{{ $article->meaning }}">
             </div>
             <br>
             <div class="form-group">
               <label for="example">Ejemplo</label>
               <textarea class="form-control" id="example" name="example" rows="3">{{ $article->example }}</textarea>
             </div>
             <br>
             <div class="form-group">
               <label for="more_information">Más información</label>
               <textarea class="form-control" id="more_information" name="more_information" rows="3">{{ $article->more_information }}</textarea>
             </div>
             <br>
            

            <hr class="d-sm-none">
            </div>
        <div class="col-sm-5 legend p-3 my-1 border" id="definitionCSS">
        <fieldset>
        <legend>Datos de referencia</legend>
              <div class="form-group">
                <label for="reference_title">Título referencia</label>
                <input type="text" class="form-control" id="reference_title" name="reference_title" value="{{ $article->referencia ? $article->referencia->title : 'No hay datos' }}">
              </div> 
              <br>
              <div class="form-group">
                <label for="reference_author">Autor referencia</label>
                <input type="text" class="form-control" id="reference_author" name="reference_author" value="{{ $article->referencia ? $article->referencia->author : 'No hay datos'}}">
              </div>
              <br>
              <div class="form-group">
                <label for="reference_date">Fecha referencia</label>
                <input type="date" class="form-control" id="reference_date" name="reference_date" value="{{ $article->referencia ? $article->referencia->date : 'No hay datos' }}">
              </div>
              <br>
              <div class="form-group">
                <label for="reference_link">Link referencia</label>
                <input type="text" class="form-control" id="reference_link" name="reference_link" value="{{ $article->referencia ? $article->referencia->link : 'No hay datos' }}">
              </div>
              <br>
              <div class="form-group">
                <label for="image">Enlace imagen</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $article->referencia ? $article->imagen->url : 'No hay datos' }}">
              </div> 
          </fieldset>  
          <br>
          <br>
          <fieldset>
            <legend>Categorías asociadas</legend>
                <div class="form-group">
                    <select name="category_ids[]" id="category_ids" multiple class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
          </fieldset>  
      </div>
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
  </div>
  <button type="submit" class="btn btn-success bi bi-journal-plus"> Modificar</button>
             <a href="{{ route('articulos.index') }}" class="btn btn-danger bi bi-journal-minus"> Cancelar</a>
           </form>
</div>
<br>
   </x-layouts.app>