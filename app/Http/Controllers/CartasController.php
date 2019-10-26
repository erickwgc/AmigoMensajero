<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Input;
use Validator;
use App\Carta;
use App\Imagen;
use Carbon\Carbon;

class CartasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('carta', compact("carta"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array( 

        );
        $carta= new Carta();
        $carta->autor=$request->campo_nombre;
        $carta->contenido=$request->contenido;
        $carta->fecha=Carbon::now()->format('Y-m-d');
        
        $carta->hora=Carbon::now()->format('H:i:s');
                     

    //CLASIFICAR CARTA 
     $contenido=strtoupper($request->contenido);
     $palabra_texto=explode(" ", $contenido);
     
     $array_peligrosas = array("MATAR", "MUERTE", "MORIRME", "SANGRE","MATANZA","ASESINAR","APUÃ‘ALAR");
     $array_correctas = array("ESTUDIO","LEER","CANTAR","REZAR","AGRADECER","DIOS","AMOR");
     
     //$array_normales = array("familia","casa","padre","madre","hermanos","navidad");
     $resultado="";

     for($i=0;$i<count($palabra_texto);$i++){
     
           $palabra=$palabra_texto[$i];
     
         for($j=0;$j<count($array_peligrosas);$j++){
        
            if($palabra==$array_peligrosas[$j]){
        
                 $resultado="Rojo";
                 $j=count($array_peligrosas);
                 $i=count($palabra_texto);      
             }
         }
        
        if($resultado==""){
            for($j=0;$j<count($array_correctas);$j++){
                if($palabra==$array_correctas[$j]){
                    $resultado="Verde";
                    $j=count($array_peligrosas);
                    $i=count($palabra_texto);
                }
            }
        } 
     }
     
     if($resultado==""){
        $resultado="Amarillo";
     }

//FIN
    $carta->color_car=$resultado;
    $carta->save();
        
        if($name = $_FILES["mi_imagen"]["name"][0] != null ){
            $total = count($_FILES["mi_imagen"]["name"]);

         
            for ($i=0; $i < $total; $i++) {     
                $imagenes = new Imagen();
                $tmp_name = $_FILES["mi_imagen"]["tmp_name"][$i];
                $name = $_FILES["mi_imagen"]["name"][$i];

                $tipo = $_FILES["mi_imagen"]["type"][$i];
                $imagenes->cod_car=$carta->id;
                $imagenes->nombre=$name;
                if (($_FILES["mi_imagen"]["type"][$i]== "image/gif")
                || ($_FILES["mi_imagen"]["type"][$i] == "image/jpeg")
                || ($_FILES["mi_imagen"]["type"][$i] == "image/jpg")
                || ($_FILES["mi_imagen"]["type"][$i] == "image/png"))
                {
                $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . '/../uploads/';
                move_uploaded_file($tmp_name, $carpeta_destino.$name);
                $imagenes->ruta=$carpeta_destino;
                $imagenes->tipo=$tipo;
                $imagenes->save();
                }
            }
            
        }
        return view('carta');
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
