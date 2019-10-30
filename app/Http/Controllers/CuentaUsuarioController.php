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
}
