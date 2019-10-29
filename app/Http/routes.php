<?php

use App\User;
use App\Role;


Route::group(['middleware' => 'guest'], function () {

Route::get('/inicio', "PaginasController@inicio");
Route::get('/boletin', "PaginasController@boletin");
Route::resource('/carta', "CartasController");
Route::get('/login',"loginController@index");

Route::post('/login',[
    'as'=>'login',
    'uses'=>"loginController@store"]);
});
//USUARIOS
/*Route::resource('/usuarios',"UsuariosController");


Route::get('delete/{id}', 'UsuariosController@destroy')->name('usuario.delete');*/
///USER

Route::group(['middleware' => 'admin'], function () {
Route::resource('/usuarios',"UsersController");
Route::get('delete/{id}', 'UsersController@destroy')->name('usuario.delete');
Route::get('/usuarios/buscador',"UsuariosController@buscador");
Route::get('/roles/asignacion',"RolesController@asignar");
Route::post('/roles/asignacion/unir',"RolesController@role_user");
Route::resource('/roles',"RolesController");
Route::get('/permisos/asignacion',"PermisosController@asignar");
Route::post('/permisos/asignacion/ui',"PermisosController@asignado");
Route::resource('/permisos',"PermisosController"); 
//Route::get('/permisos/asignacion',"PermisosController@asignacion");
//Route::get('/AdminInicio',"AdminController@Inicio");
  
});


Route::group(['middleware' => 'auth'],function () {
Route::get('logout', ['as' => 'logout', 'uses' => 'loginController@cerrarSesion']);
Route::get('/usuarioGeneral',"UsuarioGeneral@Inicio");
Route::get('/', "PaginasController@inicio");

  });

Route::get('/prueba', function () {
    $user = Auth::user()->roles;
    //$roles = $user->permisos;    
    foreach(Auth::user()->roles as $role){
       foreach($role->permisos as $permiso){
          echo $permiso->nom_per;
       } 
    } 
    
   // return  $user;
});

//CORREO
Route::resource('correo', "CorreoController");


