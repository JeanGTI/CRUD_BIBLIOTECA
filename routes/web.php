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
Route::get('autor/{autor},/edita', 'controllerAutor@edita_Autor');
Route::post('autor/salva', 'controllerAutor@salva_Autor');
Route::patch('autor/{autor}', 'controllerAutor@atualiza_Autor');
Route::delete('autor,{autor}', 'controllerAutor@deleta_Autor');

