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

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/productos', 'ProductosController@listado');

Route::get('/detalle', 'DetalleController@mostrar');

Route::get('/registro', 'RegistroController@mostrar');

Route::get('/ingreso', 'IngresoController@login');

Route::get('/contacto', 'ContactoController@listado');

Route::get('/faq', 'faqController@listado');

Route::get('/perfil', 'PerfilController@datos');

Route::get('/carrito', 'CarritoController@mostrar');
Route::get('/prueba', 'PruebaCarrito@ver');

Route::get('/recuperar', function () {
    return view('recuperar');
});
