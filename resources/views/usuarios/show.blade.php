@extends("../layout/plantilla")
@section("cabecera")
@endsection
@section("contenido")
    <!--<h1>{{$usuario->nom_usu}}</h1>
    <h1>{{$usuario->ape_usu}}</h1>
    <h1>{{$usuario->email}}</h1>
    <h1>{{$usuario->fecha_nac}}</h1>
    <h1>{{$usuario->tel_usu}}</h1>
-->
    @if (session('status'))
                        
   
                        
    @endif
                       
    <h1 style="color:seashell"> {{auth()->user()->nom_usu}} {{auth()->user()->ape_usu}}</h1>
@endsection