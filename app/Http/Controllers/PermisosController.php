<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Permiso;
use App\Notificacion;
use App\Role;
class PermisosController extends Controller
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
        $permisos=Permiso::all();
        return view("permisos.index",compact("permisos","notificaciones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function asignar(Request $request)
    {
         $notificaciones=Notificacion::Notificacion("0")->paginate(10);
        if($request->user() == null){
            return view("auth.login",compact("notificaciones"));
        }else{ 
        $request->user()->autorizeRoles(['administrador']);
        }
       $permisos=Permiso::all();
       $roles = Role::all();
       return view("permisos.asignar",compact("permisos","roles","notificaciones"));
    
    }
    public function asignado(Request $request)
    {   
        if(($request->role_id != "vacio") && ($request->permisos != null) ){
            $rol=Role::findOrFail($request->role_id);
            $rol->permisos()->sync($request->permisos);
        }
        return redirect("/roles");;
    }
}
