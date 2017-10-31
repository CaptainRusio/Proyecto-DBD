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
Route::get('/user',function(){
	return view('user');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/voluntier', function () {
    return view('voluntier');
});

Route::get('pruebaBaseDatosVista', function () {
    return view('pruebaBaseDatosVista');
});

Auth::routes();

//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@create');

Route::post('crearBaseDatos', 'pruebaBaseDatos@create');

Route::post('actualizarBaseDatos', 'pruebaBaseDatos@guardar');

Route::post('mostrarBaseDatos', 'pruebaBaseDatos@mostrar');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@obtenerDatos');
