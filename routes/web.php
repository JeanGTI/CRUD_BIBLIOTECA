<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('autor', 'controllerAutor@visualisa_Autor');
Route::get('autor/novo', 'controllerAutor@novo_Autor');
Route::get('autor/{autor}/edita', 'controllerAutor@edita_Autor');
Route::post('autor/salva', 'controllerAutor@salva_Autor');
Route::patch('autor/{autor}', 'controllerAutor@atualiza_Autor');
Route::delete('autor/{autor}', 'controllerAutor@deleta_Autor');

Route::get('editora', 'controllerEditora@visualisa_Editora');
Route::get('editora/novo', 'controllerEditora@novo_Editora');
Route::get('editora/{editora}/edita', 'controllerEditora@edita_Editora');
Route::post('editora/salva', 'controllerEditora@salva_Editora');
Route::patch('editora/{editora}', 'controllerEditora@atualiza_Editora');
Route::delete('editora/{editora}', 'controllerEditora@deleta_Editora');

Route::get('genero', 'controllerGenero@visualisa_Genero');
Route::get('genero/novo', 'controllerGenero@novo_Genero');
Route::get('genero/{genero}/edita', 'controllerGenero@edita_Genero');
Route::post('genero/salva', 'controllerGenero@salva_Genero');
Route::patch('genero/{genero}', 'controllerGenero@atualiza_Genero');
Route::delete('genero/{genero}', 'controllerGenero@deleta_Genero');

Route::get('livro', 'controllerLivro@visualisa_Livro');
Route::get('livro/novo', 'controllerLivro@novo_Livro');
Route::get('livro/{livro}/edita', 'controllerLivro@edita_Livro');
Route::post('livro/salva', 'controllerLivro@salva_Livro');
Route::patch('livro/{livro}', 'controllerLivro@atualiza_Livro');
Route::delete('livro/{livro}', 'controllerLivro@deleta_Livro');
