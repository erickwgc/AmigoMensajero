<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioGeneral extends Controller
{
    public function inicio()
    {
        return view('usuarioGeneral.perfil');
    }

}
