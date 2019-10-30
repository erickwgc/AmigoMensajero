<?php

use App\User;
use App\Role;


Route::group(['middleware' => 'guest'], function () {
<<<<<<< HEAD

   // Route::get('/', "PaginasController@inicio");
   // Route::get('/inicio', "PaginasController@inicio");
//Route::get('/', "PaginasController@inicio");
=======
>>>>>>> 51b1d3364b0b9bffab92ce1a24b726e36f00d398
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


Route::get('/AdminInicio',"AdminController@Inicio");
});


Route::group(['middleware' => 'auth'],function () {
Route::get('logout', ['as' => 'logout', 'uses' => 'loginController@cerrarSesion']);
Route::get('/usuarioGeneral',"UsuarioGeneral@Inicio");
Route::get('/', "PaginasController@inicio");
  

});

Route::get('/prueba', function () {
    $user = Auth::user();
   // $usuario = User::find($user_id->id)->roles()->where('nom_rol','administrador')->first();  
   // $id =  $usuario->pivot->role_id;
   // $rol = Role::find($id)->nom_rol;
    
    //$user = App\User::find(1);
    Auth::user()->roles; 
    foreach ($user->roles as $role) {
        $rol  = $role->nom_rol ;
    }
   
    return  $rol;
});

//CORREO
Route::resource('correo', "CorreoController");
//cuentaUsuario
Route::get('/configuracion',"CuentaUsuarioController@configuracion");
Route::get('/informacionPersonal',"CuentaUsuarioController@informacionPersonal");
Route::get('/notificaciones',"CuentaUsuarioController@notificaciones");
