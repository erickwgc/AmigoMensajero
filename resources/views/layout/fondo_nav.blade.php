<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AMIGO MENSAJERO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/estilo-plantilla.css')}}">
         <script type="text/javascript" src="{!! asset('assets/js/jquery-3.4.1.min.js') !!}"></script>
		<!-- pligin para validaciones-->
		<script type="text/javascript" src="../../../public/assets/js/libreriaValidacion.js"></script>
		<script src="../../../public/assets/js/validacionesMin.js"></script>
		<script src="../../../public/assets/js/jquery.validate.js"></script> 
		
		
        <script type="text/javascript" src="{!! asset('assets/js/bootstrap.js') !!}"></script>
        <style type="text/css">
            body{
                background-image: url('{{asset('assets/img/fondo.png')}}');
                background-size: cover;
                height: 800px;
            }
           
        </style>
		


    </head>
    <body>
            <header>
                <!-- Logotipo y titulo -->
                <img src="{{asset('assets/img/avion.png')}}" height="80px" width="150px"><a class="navbar-brand" href="#" style="font-family: 'Concert One', cursive; font-size: 45px; color: white;">EL AMIGO MENSAJERO</a>
                @if (Auth::guest())
                    <button type="button" class="btn btn-success" data-toggle="modal" onclick="location.href='http://localhost:8000/login'" style="margin-left:350px; border:0px; padding: 0px;"><img src="{{asset('assets/img/botonIniciarSesion.png')}}" height="40px" width="200px"/></button>
                @else             
                    <button type="button" class="btn btn-success" data-toggle="modal" onclick="location.href='http://localhost:8000/logout'" style="margin-left:350px; border:0px; padding: 0px;"><img src="{{asset('assets/img/botonCerrarSesion.jpeg')}}" height="40px" width="200px"/></button>
                @endif
                 
            </header>
      

    </body>
</html>
