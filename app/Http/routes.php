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
Route::resource('/informacion',"InformacionController");


//USUARIOS
/*Route::resource('/usuarios',"UsuariosController");


Route::get('delete/{id}', 'UsuariosController@destroy')->name('usuario.delete');*/
///USER
Route::resource('/usuarios',"UsersController");


Route::get('delete/{id}', 'UsersController@destroy')->name('usuario.delete');
//Route::get('/usuarios/buscador',"UsuariosController@buscador");
//LOGIN
Route::get('/login',"loginController@index");

Route::post('/loginValidar',[
    'as'=>'loginValidar',
    'uses'=>"loginController@store"]);

//Route::get('/loginCerra',"loginController@cerrarSesion");
//Route::get('/loginCerra',[
 //   'as'=>'loginCerra',
 //   'uses'=>"loginController@cerrarSesion"]);


 
 Route::get('/roles/asignacion',"RolesController@asignar");
   Route::post('/roles/asignacion/unir',"RolesController@role_user");
Route::resource('/roles',"RolesController");
  


     Route::get('/permisos/asignacion',"PermisosController@asignar");
   Route::post('/permisos/asignacion/ui',"PermisosController@asignado");
   Route::resource('/permisos',"PermisosController"); 


   

//ADMINISTRADOR
Route::resource('/administrador', "AdminController");

Route::group(['middleware' => 'auth'], function(){
	Route::get('logout', ['as' =>'logout', 'uses' => 'loginController@cerrarSesion']);
});
Route::resource('/correo', "CorreoController");
   Route::get('/configuracion',"CuentaUsuarioController@configuracion");
   Route::post('/configuracion/eliminar',"CuentaUsuarioController@eliminar");
   Route::post('/configuracion/usuario',"CuentaUsuarioController@actualizar");
   Route::get('/informacionPersonal',"CuentaUsuarioController@informacionPersonal");
   Route::post('/informacionPersonal/editar',"CuentaUsuarioController@update");
   Route::get('/notificaciones',"CuentaUsuarioController@notificaciones");

 