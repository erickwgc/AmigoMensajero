<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InformacionController extends Controller
{
    public function index(){

    }
    public function create(){

        return view("informacion.create");
    }
    
}
