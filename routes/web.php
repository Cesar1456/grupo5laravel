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

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/detalle', function () {
    return view('detalle');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/faq', 'faqController@listado');

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/recuperar', function () {
    return view('recuperar');
});
