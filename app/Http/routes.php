<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/* /
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', "PaginasController@inicio");

Route::get('/inicio', "PaginasController@inicio");

/*Route::get('/carta', "PaginasController@carta");*/

Route::resource('/carta', "CartasController");
Route::get('/boletin', "PaginasController@boletin");


//USUARIOS
/*Route::resource('/usuarios',"UsuariosController");


Route::get('delete/{id}', 'UsuariosController@destroy')->name('usuario.delete');*/
///USER
Route::resource('/usuarios',"UsersController");


Route::get('delete/{id}', 'UsersController@destroy')->name('usuario.delete');
Route::get('/usuarios/buscador',"UsuariosController@buscador");
//LOGIN
Route::get('/login',"loginController@index");

Route::post('/loginValidar',[
    'as'=>'loginValidar',
    'uses'=>"loginController@store"]);

//Route::get('/loginCerra',"loginController@cerrarSesion");
//Route::get('/loginCerra',[
 //   'as'=>'loginCerra',
 //   'uses'=>"loginController@cerrarSesion"]);


 //ROLES

Route::resource('/roles',"RolesController");

//ADMINISTRADOR
Route::resource('/administrador', "AdminController");

Route::group(['middleware' => 'auth'], function(){
	Route::get('logout', ['as' =>'logout', 'uses' => 'loginController@cerrarSesion']);
});

