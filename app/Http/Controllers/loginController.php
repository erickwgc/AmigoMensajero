<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests;
use App\User;
use App\Role;
use Validator;
class loginController extends Controller
{
    
    public function index()
    {

       /* // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return view("auth.paginaLogin");
        }
        // Si no hay sesión activa mostramos el formulario*/
        
        return view("auth.login");
    }

	
	public function login()
	{
		$this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        
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
        $this->validate($request,[

            'correo_name'=>'required|string|min:3',
            'contrasenia'=>'required',]);
      

        $whitMail = ['email' => $request->correo_name, 'password' => $request->contrasenia];
        $whitUser = ['username' => $request->correo_name, 'password' => $request->contrasenia];

        
        if (Auth::attempt($whitMail) || Auth::attempt($whitUser)) {
            $user = Auth::user();
            foreach ($user->roles as $role) {
                $rol  = $role->nom_rol ;
            }
            if( $rol = 'administrador'){
            return view('administrador.inicio',compact("user","rol"));
            } 
            if($rol != 'administrador'){
            return view('usuarioGeneral.perfil' , compact("user","rol"));
            } 
          
        } else {
            return 'no encontrado';
        }
       
    }




     public function cerrarSesion()
     {
            //$user = Auth::user();
           //Auth::logout();
            Session::flush();
    
            return redirect('/');
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
