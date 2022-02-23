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

Route::get('/prueba', function () {
    return view('welcome');
});

Route::post('/', function () {
    return view('welcome');
});

Route::get('/soporte', function () {
    return view('soporte');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/banca', function () {
    return view('bancaonline');
});

Route::get('/saludo', function () {
    return "Esto es un saludo";
 });

 Route::match(['get', 'post'], '/experimento', function (){
    return 'Hola Mundo';
  });

Route::get('/usuariosOld', 'UserController@index');

Route::resource('usuarios','UserController');

Route::resource('productos','ProductoController');

Route::resource('cursos','CursoController');    
 
