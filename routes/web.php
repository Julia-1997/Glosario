<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','home') -> name ('home');

/**
 * Rutas para los artículos
 */
Route::controller(ArticleController::class)->group(function (){
Route::get('/articulos', 'index')->name('articulos.index');
Route::get('/articles/filter/{letter}', 'filterByLetter')->name('articles.filter');
    Route::get('/informacion/{id}', 'show')->name('articulos.detalles');
    Route::get('/crear', 'create')->name('articulos.crear');
    Route::post('/articulos/crear',  'store')->name('articulos.store');
    Route::get('/editar/{id}', 'edit')->name('articulos.editar');
    Route::put('/editar/{id}', 'update')->name('articulos.update');;
    Route::delete('/articulos/eliminar/{id}',  'destroy')->name('articulos.eliminar');
});


/**
 * Rutas para las categorías 
 */
Route::controller(CategoryController::class)->group(function (){
    Route::get('/categorias', 'index')->name('categorias.index');
        Route::post('/crear',  'store')->name('categorias.store');
        Route::delete('/eliminar/{id}',  'destroy')->name('categorias.eliminar');
    });