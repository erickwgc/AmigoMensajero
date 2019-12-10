@if (Auth::guest())
  <script>window.location = "/login";</script>
@else
@extends("../layout/plantilla")
@section("cabecera")
@endsection
@section("contenido")
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
              
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
                      
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/inicio" >Inicio</a>
          </li>
                        
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/correo">Cartas de niños</a>
          </li>
                        
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/usuarios">Usuarios</a>
          </li>
                        
          <li class="nav-item ">
              <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost:8000/permisos">Permisos</a>
        </li>
       
                    
        </ul>
      </div>
</nav>


 


    <br>
    <br>

   </form>   
    <center>
    <div style="background-color: white;border: solid 5px bold; width: 600px; overflow: scroll;">
      
   
      @foreach($cartas_rojas as $carta)

      
          <aside class="cartaCompleta" >
              <img src="{{asset('assets/img/rojo.png')}}" height="5px" width="280px">
              <a href="#" onClick="Mostrar( '{{$carta->autor}}','{{$carta->hora}}','{{$carta->fecha}}','{{$carta->contenido}}' );"
            data-toggle="modal" data-target="#exampleModal">[ver carta]</a>
              <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a>
              <input type="checkbox" 
              name="cont_cartas_rojas[]" value="{{$carta->cod_car}}"
              style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px;">
              <p>-------------------------------------------<p>  
          </aside>    
          
      @endforeach

      
      
    </div>
    </center>
    <!-- FIN CONTENIDO CARTAS ROJAS-->
    
    <!--CONTENIDO CARTAS AMARILLAS-->
    
    <!--FIN CONTENIDO CARTAS AMARILLAS-->

    <!--CONTENIDO CARTAS VERDES-->
   
  <!-- FIN CONTENIDO CARTAS VERDES-->

<!--
 <input type="submit" value="" onclick = "location='#'" style="background-image: url('{{asset('assets/img/botonCrearBoletin.png')}}'); 
              background-size: contain; height: 40px; width: 143px; right: 300px; position: absolute;" />
-->

 @include("../correo/mostrar_carta")

    </form>

    <script>
  
    var Mostrar = function(autor,hora,fecha,contenido)
      {  
        $('#autor').val(autor);
        $('#hora').val(hora);
        $('#fecha').val(fecha);
        $('#contenido').val(contenido);  
      }    
    </script>
    
    <!--MOSTRAR CON MODAL LA CARTA SELECCIONADA-->
   

@endsection
@endif