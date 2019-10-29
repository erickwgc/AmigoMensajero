<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Role;
use App\Notificacion;
use App\User;
class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */
    
    public function __construct()
    {
      //  $this->middleware('admin');
    }   


    public function index()
    {
        $notificaciones=Notificacion::Notificacion("0")->paginate(10);
        $roles=Role::all();
        return view("roles.index",compact("roles","notificaciones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notificaciones =Notificacion::Notificacion("0")->paginate(10);
        return view("roles.create","notificaciones");   
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
        $notificaciones =Notificacion::Notificacion("0")->paginate(10);
        $rol = Role::findOrFail($id);
        return view("roles.show",compact("rol","notificaciones"));
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
    public function asignar(){

        $notificaciones =Notificacion::Notificacion("0")->paginate(10);
        $usuarios=User::all();
        $roles=Role::all();
        return view("roles.asignar",compact("usuarios","roles","notificaciones"));
    
    }
    
    public function role_user(Request $request){
        $notificaciones =Notificacion::Notificacion("0")->paginate(10);
        $usuario=User::findOrFail($request->user_id);
        $usuario->roles()->sync($request->roles);
       
        $usuarios=User::buscar($request->buscar)->orderBy('id','DESC')->paginate(10);
        return view("usuarios.index",compact("usuarios","notificaciones"));
    }
}
