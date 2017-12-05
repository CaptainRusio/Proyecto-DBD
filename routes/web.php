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
Route::get('/enviar_tweet', function()
{
    return Twitter::postTweet(['status' => 'Mi primer tweet desde Laravel', 'format' => 'json']);
});

Route::get('/', function () {
    return view('welcome')->with('message', "");
});
Route::get('validate', function () {
    return 'get! ';
});
Route::post('validate', function () {
});
Route::post('validate', 'pruebaPostController@validates');

Route::get('/p', function () {
    return view('pruebaPost');
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

Route::get('/posts','PostsController@index');



Route::get('/help', function () {
    return view('help');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/voluntier', function () {
    return view('voluntier');
});

Route::get('/date', function () {
    return view('date');
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

Route::get('/users','UsersController@index')->name('usersIndex');

Route::get('/users/{id}/destroy',[
    'uses' => 'UsersController@destroy',
    'as' => 'users.destroy'
    ]);


Route::get('/users/{id}/edit',[
    'uses' => 'UsersController@show',
    'as' => 'users.edit'
    ]);

Route::get('/users/{id}/block',[
    'uses' => 'UsersController@bloquear',
    'as' => 'users.block'
    ]);

Route::get('/users/{id}/unblock',[
    'uses' => 'UsersController@desbloquear',
    'as' => 'users.unblock'
    ]);

Route::post('/users/{id}/updateUser', 'UsersController@update');


Route::get('/donateAnonymous','anonymousDonationController@index');
Route::post('createDonac','anonymousDonationController@create');

Route::get('/catastrophe2', 'CatastropheController@create');
Route::get('/catastrophe2', 'CatastropheController@prueba');



Route::get('pruebaBaseDatosVista', function () {
	$data ['datos'] = [];
	$data2 ['datosConsulta'] = [];
    return view('pruebaBaseDatos0Vista', $data, $data2);
});



Auth::routes();

//Catastrophes Actions
Route::get('/catastrophesAndActions', 'CatastrophesAndActionsController@showCatastrophes')->name('catastrophesAndActions');

Route::post('/actionsOf','CatastrophesAndActionsController@showActions') ->name('actionsOf'); 

Route::post('/actionsOf','ActionsController@showActions'); 
//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@create');

Route::post('crearBaseDatos', 'pruebaBaseDatos@create');

Route::post('actualizarBaseDatos', 'pruebaBaseDatos@guardar');

Route::post('consultaWhere', 'pruebaBaseDatos@consultaWhere');

Route::post('mostrarBaseDatos', 'pruebaBaseDatos@mostrar');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('storeCatastrophe', 'CatastropheController');


//Route::get('pruebaBaseDatosVista', 'pruebaBaseDatos@obtenerDatos');

//Vincular user con medidas
Route::post('actionToUser','ActionUserController@store');

Route::post('showActionUser','ActionUserController@show');
//

//Mostrar acciones usuario
Route::post('showRecordUser','RecordController@show');
//

Route::post('/action','ActionController@index');


Route::resource('nuevaMedida','CreateActionsController');

Route::post('create','CreateActionsController@create');


//actions
Route::get('/actions','ActionsController@index')->name('actions');
Route::get('/actions/{id}/destroy',[
    'uses' => 'ActionController@destroy',
    'as' => 'action.destroy'
    ]);
Route::post('/actions/{id}/editAction',[
    'uses' => 'ActionController@storeEdit',
    'as' => 'editAction'
    ]);
Route::get('/actions/{id}/edit',[
    'uses' => 'ActionController@edit',
    'as' => 'action.edit'
    ]);
Route::get('/actions/{id}/enable',[
    'uses' => 'ActionController@update',
    'as' => 'action.enable'
    ]);

Route::post('/createAction','ActionsController@newAction');


//Catastrophe

Route::post('showCatastrophe','CatastropheController@show');

Route::post('publishTwitter', 'CatastropheController@publishTwitter');

Route::post('editCatastrophe','CatastropheController@edit');

Route::post('updateCatastrophe','CatastropheController@update');

Route::post('eliminarCatastrophe','CatastropheController@bloquear');
