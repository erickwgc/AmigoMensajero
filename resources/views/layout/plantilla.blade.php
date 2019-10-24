<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AMIGO MENSAJERO</title>
    <style>
    #campos{
        width: 30%;
    }
    .contenido form, table{
        width:50%;
        margin: 0 auto;
        background:#FFFFFF;
        }
    
    thead{
        background-color: rgb(255,192,0);
        font-size: 14px;
        font-weight: bolder;
        }
        #idCampo{
            color: white;


        }
       
    </style>
</head>
<body>
    @include("layout.fondo_nav")
    @yield("cabecera")    

    <div class="contenido">
        @yield("contenido")
    </div>
    
</body>
</html>