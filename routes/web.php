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
    return view('Autenticacion.login');
});


Route::resource('Autenticacion', 'AutenticacionController');

Route::resource('Usuarios', 'UsuariosController');
Auth::routes();
Route::get('Home', 'HomeController@index')->name('Home.index');
Route::resource('Estudiantes', 'EstudiantesController');
Route::get('Estudiantes', 'EstudiantesController@index')->name('Estudiantes.index');
