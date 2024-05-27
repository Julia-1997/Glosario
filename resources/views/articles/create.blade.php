<x-layouts.app>


    <!--Titulo -->
    <x-slot name="title">
          Añadir un término
    </x-slot>

    <div class="container mt-5">
        <div class="row">
        <h2 class="bi bi-bookmark-plus-fill"> Añadir artículo</h2>
         <hr>
            <div class="col-sm-7">
            <form action="{{ route('articulos.store') }}" method="post">
             @csrf
             <div class="form-group">
               <label for="term">Término</label>
               <input type="text" class="form-control" id="term" name="term" required>
             </div>
             <br>
             <div class="form-group">
               <label for="definition">Definición</label>
               <textarea class="form-control" id="definition" name="definition" rows="3" required></textarea>
             </div>
             <br>
             <div class="form-group">
               <label for="description">Descripción</label>
               <textarea class="form-control" id="description" name="description" rows="3"></textarea>
             </div>
             <br>
             <div class="form-group">
               <label for="meaning">Acepción</label>
               <input type="text" class="form-control" id="meaning" name="meaning">
             </div>
             <br>
             <div class="form-group">
               <label for="example">Ejemplo</label>
               <textarea class="form-control" id="example" name="example" rows="3"></textarea>
             </div>
             <br>
             <div class="form-group">
               <label for="more_information">Más información</label>
               <textarea class="form-control" id="more_information" name="more_information" rows="3"></textarea>
             </div>
             <br>
            

            <hr class="d-sm-none">
            </div>
        <div class="col-sm-5 legend p-3 my-1 border" id="definitionCSS">
        <fieldset>
        <legend>Datos de referencia</legend>
              <div class="form-group">
                <label for="reference_title">Título referencia</label>
                <input type="text" class="form-control" id="reference_title" name="reference_title">
              </div> 
              <br>
              <div class="form-group">
                <label for="reference_author">Autor referencia</label>
                <input type="text" class="form-control" id="reference_author" name="reference_author">
              </div>
              <br>
              <div class="form-group">
                <label for="reference_date">Fecha referencia</label>
                <input type="date" class="form-control" id="reference_date" name="reference_date">
              </div>
              <br>
              <div class="form-group">
                <label for="reference_link">Link referencia</label>
                <input type="text" class="form-control" id="reference_link" name="reference_link">
              </div>
              <br>
              <div class="form-group">
                <label for="image">Enlace imagen</label>
                <input type="text" class="form-control" id="image" name="image">
              </div> 
          </fieldset>  
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
  </div>
  <button type="submit" class="btn btn-success bi bi-journal-plus"> Añadir</button>
             <a href="{{ route('articulos.index') }}" class="btn btn-danger bi bi-journal-minus"> Cancelar</a>
           </form>
</div>
<br>
   </x-layouts.app>