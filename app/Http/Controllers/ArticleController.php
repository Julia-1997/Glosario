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
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view('articles.index', compact('articles'));

    }

    public function filterByLetter($letter)
    {
        $articles = Article::where('term', 'like', $letter . '%')->paginate(5);
        return view('articles.index', compact('articles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('articles.create');
    }

    /**
     * Store a newly created resource in storage.
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

        //redirección y mensaje de éxito
        return redirect()->route('articulos.index')
            ->with('success', 'Artículo insertado en la BD');        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::with('referencia', 'imagen','categoria')->findOrFail($id);
        $category = Category::with('articles')->findOrFail($id);
        return view('articles.show', compact('article', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $article = Article::with('imagen','referencia')->findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
         //validaciones
         $article = Article::findOrFail($id);
         $request->validate([
            'term' => 'required|string|min:2|max:100'.$article->id,
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

        //redirección y mensaje de éxito
        return redirect()->route('articulos.index')
            ->with('success', 'Artículo actualizado en la BD');      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('articulos.index')
          ->with('success', 'Artículo borrado de la BD');
    }
}
