<?php

namespace App\Http\Controllers;

use App\Informacion;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class InformacionProfeController extends Controller
{

    
    public function index()
    {
        //$informacion = Informacion:all();
        return view("profesional.index");
    }
    public function create(){
        
        return view("profesional.crear"); 
    }    

    public function store(Request $request)
    {
           
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
   


}
