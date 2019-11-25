<?php

use App\User;
use App\Role;
use App\Pemiso;

Route::group(['middleware' => 'guest'], function () {
   Route::get('/inicio', "PaginasController@inicio");
   Route::get('/boletin', "PaginasController@boletin");
   Route::resource('/carta', "CartasController");
   Route::get('/login',"loginController@index");
   Route::get('/', "PaginasController@inicio");
   
   Route::post('/login',[
       'as'=>'login',
       'uses'=>"loginController@store"]);
});

Route::group(['middleware' => 'admin'], function () {
   Route::resource('/usuarios',"UsersController");
   Route::get('delete/{id}', 'UsersController@destroy')->name('usuario.delete');
   //Route::get('/usuarios/buscador',"UsuariosController@buscador");
   Route::get('/roles/asignacion',"RolesController@asignar");
   Route::post('/roles/asignacion/unir',"RolesController@role_user");
   Route::resource('/roles',"RolesController");
   Route::get('/permisos/asignacion',"PermisosController@asignar");
   Route::post('/permisos/asignacion/ui',"PermisosController@asignado");
   Route::resource('/permisos',"PermisosController"); 
   

});


Route::group(['middleware' => 'auth'],function () {
   Route::get('logout', ['as' => 'logout', 'uses' => 'loginController@cerrarSesion']);
   Route::get('/usuarioGeneral',"UsuarioGeneral@Inicio");
   Route::get('/inicio', "PaginasController@inicio");
   Route::resource('/correo', "CorreoController");

});




//cuentaUsuario
Route::get('/configuracion',"CuentaUsuarioController@configuracion");
Route::post('/configuracion/eliminar',"CuentaUsuarioController@eliminar");
Route::post('/configuracion/usuario',"CuentaUsuarioController@actualizar");

Route::get('/informacionPersonal',"CuentaUsuarioController@informacionPersonal");
Route::post('/informacionPersonal/editar',"CuentaUsuarioController@update");
Route::get('/notificaciones',"CuentaUsuarioController@notificaciones");

Route::get('/prueba',function(){
  
   return( Auth::user()->getPermisos('crear usuario'));
   
});
Route::get('/informacionProfesi',"InformacionProfeController@inforPorfesi");  