<?php

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

Route::get('/agregar', function() {
  return view('agregar');
});

Route::post('/agregar_post', 'PostsController@ingresarEntradas');

Route::get('/entradas/ver', 'PostsController@verEntradas')->name('listado');

Route::delete('/entradas/{id}', 'PostsController@borrarEntrada');