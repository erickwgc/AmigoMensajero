<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Permiso;
use App\Role;
use App\Notificacion;
use App\User;


class RolesController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $notificaciones=Notificacion::Notificacion("0")->paginate(10);
        if($request->user() == null){
            return view("auth.login",compact("notificaciones"));
        }else{ 
        $request->user()->autorizeRoles(['administrador']);
        }
        
        $roles=Role::all();
        return view("roles.index",compact("roles","notificaciones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $notificaciones=Notificacion::Notificacion("0")->paginate(10);
        if($request->user() == null){
            return view("auth.login",compact("notificaciones"));
        }else{ 
        $request->user()->autorizeRoles('administrador');
        }
        
        return view("roles.create",compact("notificaciones"));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles=new Role();
        $roles->nom_rol=$request->nom_rol;
        $roles->descripcion=$request->descripcion;  
        $roles->save();
        return redirect("/roles");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $notificaciones=Notificacion::Notificacion("0")->paginate(10);
         $rol = Role::findOrFail($id);
        return view("roles.show",compact("rol","notificaciones"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $notificaciones=Notificacion::Notificacion("0")->paginate(10);
        if($request->user() == null){
            return view("auth.login",compact("notificaciones"));
        }else{ 
        $request->user()->autorizeRoles('administrador');
        }
        $rol = Role::findOrFail($id);
        $permisos=Permiso::all();
        foreach($rol->permisos as $permiso){
            $permis[] = $permiso->nom_per;
        }


        return view("roles.edit",compact("rol","permisos","permis","notificaciones"));
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
      $rol = Role::findOrFail($id);
        $rol->permisos()->sync($request->permisos);
        return redirect("/roles"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rol = Role::findOrFail($id);
        $rol->permsisos()->detach();  
        return redirect("/roles"); 
    }
    public function asignar(){
        //$usrol = User::has('roles')->get();
         $notificaciones=Notificacion::Notificacion("0")->paginate(10);
        $usuarios=User::all();
        $roles=Role::all();
        return view("roles.asignar",compact("usuarios","roles","notificaciones"));
    
    }
    public function role_user(Request $request){
         $notificaciones=Notificacion::Notificacion("0")->paginate(10);
        
        if(($request->user_id != "vacio") && ($request->roles != null) ){
            $usuario=User::findOrFail($request->user_id);
           $usuario->roles()->sync($request->roles);

        }
        $usuarios=User::buscar($request->buscar)->orderBy('id','DESC')->paginate(10);
        return view("usuarios.index",compact("usuarios","notificaciones"));
    }
}
