<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Image;
use App\Models\Reference;
use Illuminate\Http\Request;


class ArticleController extends Controller
{

    /**
     * Recoge de la BD todos los artículos paginados y los devuelve a la vista index
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('articles.index', compact('articles'));

    }

    /**
     * Recoge de la BD todos los artículos paginados que comienzan con una letra seleccionada y los devuelve a la vista index
     */
    public function filterByLetter($letter)
    {
        $articles = Article::where('term', 'like', $letter . '%')->paginate(5);
        return view('articles.index', compact('articles'));
    }


    /**
     * Recoge de la BD todos las categorías y las devuelve a la vista del formulario para añadir artículo
     */
    public function create()
    {
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    /**
     * Valida los datos del formulario, crea o busca una referencia y una imagen, inserta el artículo en la BD y las categorías asociadas a ese artículo
     * @param $request campos que provienen del formulario
     */
    public function store(Request $request)
    {
        //validaciones
        $request->validate([
            'term' => 'required|string|min:2|max:100',
            'definition' => 'required|max:1000',
            'description' => 'required',
            'meaning' => 'required|max:255',
            'example' => 'required|max:1000',
            'more_information' => 'required',
            'reference_title' => 'required',
            'reference_author' => 'required',
            'reference_date' => 'required',
            'reference_link' => 'required',
            'image' => 'required',
            'category_ids' => 'required|array'
        ]);

        // // Añadir o encontrar referencia
        $referenceData = [
            'title' => $request->input('reference_title'),
            'author' => $request->input('reference_author'),
            'date' => $request->input('reference_date'),
            'link' => $request->input('reference_link')
        ];

        $reference = Reference::firstOrCreate($referenceData);

        // // Añadir o encontrar imagen
        $imageData = [
            'url' => $request->input('image')
        ];
        $image = Image::firstOrCreate($imageData);
        

        
        // Crear el artículo
        $article = Article::create([
            'term' => $request->input('term'),
            'definition' => $request->input('definition'),
            'description' => $request->input('description'),
            'meaning' => $request->input('meaning'),
            'example' => $request->input('example'),
            'more_information' => $request->input('more_information'),
            'reference_id' => $reference->id,
            'image_id' => $image->id,
        ]);

        $article->categoria()->sync($request->input('category_ids'));

        //redirección y mensaje de éxito
        return redirect()->route('articulos.index')
            ->with('success', 'Artículo insertado en la BD');        
    }

    /**
     * Recoge de la BD todos los datos asociados a un artículo concreto y los manda a la vista show
     * @param $id identificación del artículo del que se quieren ver detalles 
     */
    public function show($id)
    {
        $article = Article::with('referencia', 'imagen')->findOrFail($id);
        $article->load('categoria'); //cargar categorías asociadas 
        return view('articles.show', compact('article'));
    }

    /**
     * Recoge de la BD todos los datos asociados a un artículo concreto y los manda a la vista edit
     * @param $id identificación del artículo que se quiere modificar
     */
    public function edit($id)
    {
        $article = Article::with('imagen','referencia')->findOrFail($id);
        $article->load('categoria'); //cargar categorías asociadas 
        $categories = Category::all();
        return view('articles.edit', compact('article','categories'));
    }

    /**
     * Valida los datos del formulario, crea o busca una referencia y una imagen, inserta el artículo en la BD y las categorías asociadas a ese artículo
     * @param $request campos que provienen del formulario
     * @param $id identificador del artículo que se quiere modificar
     */
    public function update(Request $request, int $id)
    {
         //validaciones
         $article = Article::findOrFail($id);
         $request->validate([
            'term' => 'required|string|min:2|max:100'.$article->id,
            'definition' => 'required|min:2||max:1000',
            'description' => 'min:2||max:1000',
            'meaning' => 'min:2|max:255',
            'example' => 'min:2|max:1000',
            'more_information' => 'min:2|max:1000',
            'reference_title' => 'required|min:2',
            'reference_author' => 'required|min:2',
            'reference_date' => 'required|min:2',
            'reference_link' => 'required|min:2',
            'image' => 'required',
            'category_ids' => 'required|array'
        ]);

        // // Añadir o encontrar referencia
        $referenceData = [
            'title' => $request->input('reference_title'),
            'author' => $request->input('reference_author'),
            'date' => $request->input('reference_date'),
            'link' => $request->input('reference_link')
        ];

        $reference = Reference::firstOrCreate($referenceData);

        // // Añadir o encontrar imagen
        $imageData = [
            'url' => $request->input('image')
        ];
        $image = Image::firstOrCreate($imageData);
        
        
        // Crear el artículo
        $article->update([
            'term' => $request->input('term'),
            'definition' => $request->input('definition'),
            'description' => $request->input('description'),
            'meaning' => $request->input('meaning'),
            'example' => $request->input('example'),
            'more_information' => $request->input('more_information'),
            'reference_id' => $reference->id,
            'image_id' => $image->id,
        ]);

        $article->categoria()->sync($request->input('category_ids'));

        //redirección y mensaje de éxito
        return redirect()->route('articulos.index')
            ->with('success', 'Artículo actualizado en la BD');      
    }

    /**
     * Elimina de la BD el artículo seleccionado 
     * @param $id identificación del artículo que se quiere eliminar
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        // Eliminar los registros en la tabla pivot article_category
        $article->categoria()->detach();

        $article->delete(); //borrar artículo
        return redirect()->route('articulos.index')
          ->with('success', 'Artículo borrado de la BD');
    }
}
