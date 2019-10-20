<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AMIGO MENSAJERO</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
        <!-- Corrector Ortográfico -->
        <script type="text/javascript" src="gspell/AJS.js">
        </script>
        <script type="text/javascript" src="gspell/googiespell.js">
        </script>
        <script type="text/javascript" src="gspell/cookiesupport.js">
        </script>
        <link href="gspell/googiespell.css" type="text/css"
        rel="stylesheet" media="all" />
      
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link href="{{asset('assets/css/draganddrop.css')}}" rel="stylesheet">
        
        <script src="{!! asset('assets/js/dragandrop.js') !!}"></script>
    </head>
    <body>
    @extends("layout.plantilla")
      @section("cabecera") 
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/inicio">Inicio</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/carta" style="text-decoration: underline;">Escribe tu Carta<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/boletin">Boletín</a>
                      </li>
                      @if (Auth::guest())
                        
                    @else
                       <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/usuarios">Usuarios</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
                      </li>
                    @endif
                    </ul>
                  </div>
                </nav> 

                
       
     


      <form action="/carta" method="post" enctype="multipart/form-data" name="form1" >
        {{csrf_field()}}
         <div class="contenedor" >
              <img src="{{asset('assets/img/perrito.png')}}" height="200px" width="300px" id="imagenPerrito" />
              
              <div class="centrado">
                <textarea id="cajaPerrito" name="campo_nombre" placeholder="Mi nombre es..."></textarea>
              </div>
                <img src="{{asset('assets/img/globito.png')}}" height="100px" width="430px" id="imagenGlobito" />
              <div class="centrado2">Hola... soy Lucas<br>
              ¿Cómo te llamas?
              </div>
          </div>
          <section>
              <div class="example" >
    
                <input type="hidden" name="MAX_TAM" value="2097152">
                <input type="file"  class= "eligir_archivos" name="mi_imagen[]" id="mi:_imagen[]" multiple="true" style="color: white;">
                

                <textarea id="texto" cols="70" rows="8" class="textarea" name="contenido" placeholder="Esta es una prueba" required="true"></textarea>
                <!--  
                <img src="{{asset('assets/img/botonEnviar.png')}}" height="80px" width="180px" onclick="alert('Se enviará la carta al Amigo Mensajero');" style="cursor: pointer; margin-left: 50px;">
               !-->
                <input type="submit" name="EnviarCarta" value="" style="background-image: url('{{asset('assets/img/botonEnviar.png')}}'); 
                background-size: contain; height: 89px; width: 190px; margin-left: 50px; position: absolute; top: 500px; " onclick="if">
              </div>
          </section> 
 
      </form>
           

              
            
        <div style="position: absolute; right: 150px; top: 300px;">
            <img src="{{asset('assets/img/microfono.png')}}" height="120px" width="120px" onclick="procesar()" style="cursor: pointer;">
            <div>
            <button onclick="procesar()" id="procesar"> Dictar por Voz</button>
            </div>
        </div>

        
        <section  id="cajaimagen" ondragenter="return enter(event)" ondragleave="return leave(event)" ondrop="return clonar(event)" style="display: inline;">
                          <img class="imagen" src= "{{asset('assets/img/default/mama_coco.png')}}"  id="img" draggable="true" ondragstart="start(event)" ondragend="end(event)">
                          <img class="imagen" src ="{{asset('assets/img/default/auto.png')}}" id = "img1 "  draggable="true" ondragstart="start(event)" ondragend="end(event)">
                          <img class="imagen" src ="{{asset('assets/img/default/minecraft.png')}}" id = "img2 "  draggable="true" ondragstart="start(event)" ondragend="end(event)">
                          <img class="imagen" src ="{{asset('assets/img/default/Perro.png')}}" id = "img3"  draggable="true" ondragstart="start(event)" ondragend="end(event)">

        </section>
        

            
            <section id="clonado" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return clonar(event)">
              <output id="list" for="mi:_imagen[]"></output>
            </section>

           
         
                <div>
                  <div style="position: absolute; top: 640px; left: 90px;color: white; font-weight: bold;">
                  Borrar <br>Imagen                    
                  </div>
               <section  class = "papelera" id="papelera" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return eliminar(event)" style="background-image: url('{{asset('assets/img/basurero.png')}}');"> 
              </section>
   
                </div>
               
        @endsection 
        <script type="text/javascript" src="{!! asset('assets/js/mot_recon_voz.js') !!}" async></script>
        <script type="text/javascript" src="{!! asset('assets/js/vistaPrevia.js') !!}" async></script>

    </body>
</html>
