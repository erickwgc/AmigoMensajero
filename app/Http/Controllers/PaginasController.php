<?php
use App\User;
namespace App\Http\Controllers;
use App\Notificacion;
use Illuminate\Http\Request;

class PaginasController extends Controller
{

   
    public function inicio(){
       // if(Auth::guest()){
            $notificaciones =Notificacion::Notificacion("0")->paginate(10);
            //return view("welcome");
            return view("welcome",compact("notificaciones"));
       // }else{
       // }   
       //     Auth::user()->roles;
       //     foreach ($user->roles as $role) {
       //         $rol  = $role->nom_rol ;
       //     }
       // if($rol == "administrador"){ 
       //   return redirect('/AdminInicio');  
        //   }
        //   else{
        //    return redirect('/usuarioGeneral');
        //   }  
        }
    

        public function carta(){
    	    return view("carta");
        }

        public function boletin(){
    	    return view("boletin");
        }


}
