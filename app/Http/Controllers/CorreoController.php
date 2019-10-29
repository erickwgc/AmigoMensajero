<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carta;
use App\Notificacion;
class CorreoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

         $notificaciones =Notificacion::Notificacion("0")->paginate(10);
        $cartas_todas=Carta::Cartas("Rojo")->paginate(10);

        $cartas_rojas=Carta::Cartas("Rojo")->paginate(10);

        
        $cartas_amarillas=Carta::Cartas("Amarillo")->paginate(10);
        
        $cartas_verdes=Carta::Cartas("Verde")->paginate(10);

         

        return view("correo.index",compact("cartas_todas","cartas_rojas","cartas_amarillas","cartas_verdes","notificaciones"));
    }


    public function notificacion()
    {
         $notificaciones =Notificacion::Notificacion("0")->paginate(10);
        foreach($notificaciones as $notificacion){
                               
              $id=$notificacion->id;
              Notificacion::find($id)->update(['leido'=>1]);

        }  

        $notificaciones =Notificacion::Notificacion("0")->paginate(10);
        $cartas_rojas=Carta::Cartas("Rojo")->paginate(10);

        return view("correo.notificacion",compact("notificaciones","cartas_rojas"));
       
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
        //
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
