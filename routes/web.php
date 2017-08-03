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

Route::get('/index', function () {
    return view('index');
});

Route::post('/logout', 'LoginController@performLogout');

Route::get('/', 'HomeController@home');

Route::get('/nosotros', 'NosotrosController@mostrar');



Route::get('/productos', 'ProductosController@mostrar');

Route::get('/productos/mujeres', 'ProductosController@mostrarMujeres');

Route::get('/productos/hombres', 'ProductosController@mostrarHombres');

Route::get('/productos/nenes', 'ProductosController@mostrarNenes');



Route::get('/contacto', 'ContactoController@mostrar');

Route::post('/contacto', 'ContactoController@validar');

Route::get('/contactoEnviado', function() {
	return view('contactoEnviado');
});

Route::get('/faqs', 'FaqsController@mostrar');

Route::get('/registro', 'RegistroController@registrar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
