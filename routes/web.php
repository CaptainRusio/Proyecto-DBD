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
Route::get('/cm', function () {
    return view('medida_cat');
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


Route::get('/action', function () {
    return view('action');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/catastrophe', function () {
    return view('catastrophe');
});

Route::get('/action', function () {
    return view('action');
});


Route::get('/nuevaMedida', function () {
    return view('createAction');
});

Route::get('pruebaBaseDatosVista', function () {
	$data ['datos'] = [];
	$data2 ['datosConsulta'] = [];
    return view('pruebaBaseDatosVista', $data, $data2);
});

Auth::routes();

//Catastrophes Actions
Route::get('/catastrophesAndActions', 'CatastrophesAndActionsController@showCatastrophes');

//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@create');

Route::post('crearBaseDatos', 'pruebaBaseDatos@create');

Route::post('actualizarBaseDatos', 'pruebaBaseDatos@guardar');

Route::post('consultaWhere', 'pruebaBaseDatos@consultaWhere');

Route::post('mostrarBaseDatos', 'pruebaBaseDatos@mostrar');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@obtenerDatos');
