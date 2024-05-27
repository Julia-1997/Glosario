<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Recoge de la BD todos las categorías y los devuelve a la vista index
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Valida los datos del formulario e inserta la categoría en la BD
     * @param $request campos que provienen del formulario
     */
    public function store(Request $request)
    {
         //validaciones
         $request->validate([
            'name' => 'required|string|min:2|max:100'
        ]);

        // Crear la categoría
        $category = Category::create([
            'name' => $request->input('name'),
        ]);

        //redirección y mensaje de éxito
        return redirect()->route('categorias.index')
            ->with('success', 'Categoría insertada en la BD');    
    }


    /**
     * Elimina de la BD la categoría seleccionada 
     * @param $id identificación de la categoría que se quiere eliminar
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);

        // Eliminar los registros en la tabla pivot article_category
        $category->articles()->detach();
        
        // Eliminar la categoría
        $category->delete();
        
        return redirect()->route('categorias.index')
            ->with('success', 'Categoría borrada de la BD');
        
    }
    
}
