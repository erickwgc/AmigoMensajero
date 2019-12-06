<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function inicio(){
    	return view("welcome");
    }

    public function carta(){
    	return view("carta");
    }

    public function boletin(){
    	return view("boletin");
    }


}
