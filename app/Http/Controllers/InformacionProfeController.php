<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InformacionProfeController extends Controller
{
    public function inforPorfesi(){
        return view("usuarios.informaProfesion"); 
    }    

}
