<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Carta;
class BoletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*
        $lista = array(1,1,2,3,4,4,4,5,6,7,7,8,9,10,10);
        $resultado= array_unique($lista);
        $a= array(1,2,3);
        $b= array(4,5,6);
        $c= array(7,8,9);
        $d=array();
        $res=array_merge($a,$b,$c,$d);
        dd($d);
        */
        $a=(array)($request->cont_principal_rojas);
        $b=(array)($request->cont_principal_amarillas);
        $c=(array)($request->cont_principal_verdes);
        $d=(array)($request->cont_cartas_rojas);
        $e=(array)($request->cont_cartas_amarillas);
        $f=(array)($request->cont_cartas_verdes);

    $todas_cartas=array_merge($a,$b,$c,$d,$e,$f);
    $todas_cartas=array_unique($todas_cartas);
        
  /*
        $todas_cartas=array_merge(
                    $request->cont_principal_rojas,
                    $request->cont_principal_amarillas,
                    $request->cont_principal_verdes,
                    $request->cont_cartas_rojas,
                    $request->cont_cartas_amarillas,
                    $request->cont_cartas_verdes);
*/
    //    $todas_cartas=array_unique($todas_cartas);
       $cartas=array();
        for($i=0;$i < count($todas_cartas);$i++){
           $cartas[]=Carta::GetCarta($todas_cartas[$i])->get();
        }
        
        //dd($resultado);
        /*
        dd($request->cont_cartas_rojas);
        dd($request->cont_cartas_amarillas);
        dd($request->cont_cartas_verdes);

        dd($request->cont_principal_rojas);
        dd($request->cont_principal_amarillas);
        dd($request->cont_principal_verdes);
        */
        //dd($cartas);
        return view('boletin.index', compact("cartas"));
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
