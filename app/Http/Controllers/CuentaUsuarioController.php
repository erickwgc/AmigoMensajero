<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;


class CuentaUsuarioController extends Controller
{
     public function configuracion()
    {
        return view('cuentaUsuario.configuracion');
    }
     public function informacionPersonal()
    {
        return view('cuentaUsuario.informacionPersonal');
    }
      public function notificaciones()
    {
        return view('cuentaUsuario.notificaciones');
    }

    public function eliminar(Request $request)
    {
        
        $id=$request->id;
        $usuario=User::findOrFail($id);
        $usuario->delete();
        return redirect("/login");
    }

    public function actualizar(Request $request)
    {   
        $id=$request->id;
        
        User::where('id',$id)->update([
        'username'=>$request->username,
        'password'=>crypt($request->password,''),
         
         ]);
         if( $rol = 'administrador'){
            return view('welcome',compact("user","rol"));
            } 
            if($rol != 'administrador'){
            return view('usuarioGeneral.perfil' , compact("user","rol"));
            } 
    }

    public function update(Request $request)
    {   
        $id=$request->id;
        
        User::where('id',$id)->update([
        'nom_usu'=>$request->nom_usu,
        'ape_usu'=>$request->ape_usu,
        'email'=>$request->email,
        'fecha_nac'=>$request->fecha_nac,
        'tel_usu'=>$request->tel_usu,
         ]);
        return view('cuentaUsuario.informacionPersonal');
    }

}
