<?php
use App\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{


    public function inicio(){
       // if(Auth::guest()){
            
            return view("welcome");
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
