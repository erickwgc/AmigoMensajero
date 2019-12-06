<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


use App\User;

use App\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->user() == null){
            return view("auth.login");
        }else{ 
        $request->user()->autorizeRoles(['administrador']);
        }
        $usuarios=User::buscar($request->buscar)->orderBy('id','DESC')->paginate(10);
        return view("usuarios.index",compact("usuarios"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         if($request->user() == null){
            return view("auth.login");
        }else{ 
        $request->user()->autorizeRoles(['administrador']);
        }
        $roles=Role::all();
        return view("usuarios.create",compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$nom_rol=$request->nom_rol;
        
        //$rol=Role::where('nom_rol',$nom_rol)->first();
        //echo $rol;
        
        $usuarios=new User();
        
        $usuarios->nom_usu=$request->nom_usu;
        $usuarios->ape_usu=$request->ape_usu;
        $usuarios->email=$request->correo;
        $usuarios->fecha_nac=$request->fecha_nac;
        $usuarios->tel_usu=$request->tel_usu;
        $usuarios->username=$request->usuario;

        $clave = $request->contrasenia;

        $claveConf=$request->confirmcontrasenia;

        if ($clave==$claveConf) {

            
        


        $usuarios->password=crypt($clave,'');
        $usuarios->save();
        $usuarios->roles()->attach($rol);
        return redirect("/usuarios");
       }else
       {
        return "las contraseñas no coinciden";
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $usuario=User::findOrFail($id);
        
        echo $usuario->roles;

        
        //return view("usuarios.show",compact("usuario","role"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if($request->user() == null){
            return view("auth.login");
        }else{ 
        $request->user()->autorizeRoles(['administrador']);
        }
        $roles=Role::all();
        $usuario=User::findOrFail($id);
        return view("usuarios.edit",compact("usuario"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        //$usuario=User::findOrFail($id);
        //$usuario->update(($request->all()));
        
         User::where('id',$id)->update([
        'nom_usu'=>$request->nom_usu,
        'ape_usu'=>$request->ape_usu,
        'email'=>$request->correo,
        'fecha_nac'=>$request->fecha_nac,
        'tel_usu'=>$request->tel_usu,
         ]);

       // User::find($id)->roles()->sync([$request->role_id]);
        return redirect("/usuarios");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $usuario=User::findOrFail($id);
        $usuario->delete();
        return redirect("/usuarios");
    }
    public function buscador(Request $request){
        $usuarios=User::buscar($request->buscar)->orderBy('id','DESC')->paginate(10);
        return view("usuarios.index",compact("usuarios"));
    }
}
