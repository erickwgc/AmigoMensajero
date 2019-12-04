@if (Auth::guest())
  <script>window.location = "/login";</script>
@else
@extends("../layout/plantilla")
@section("cabecera")


<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/inicio" >Inicio</a>
                      </li>
                       <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/carta">Escribe tu Carta</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/boletin">Boletín</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/correo" style="text-decoration: underline;">Carta de niños</a>
                      </li>
                     <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/usuarios" >Usuarios<span class="sr-only">(current)</span></a>
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
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA CORREO</h2> 
@endsection
@section("contenido")

    <form id="formularioBuscadorCartas" action="{{ route('correo.index') }}"  method="get">
      <div style="margin-left: 55px; background-color: white; width: 220px;">  
        <input id="buscar" name="buscar" type="text" placeholder="Buscar carta" aria-describedby="buscador" style="border: 0px;">
        <button type="submit" style=" background-color: white;">
          <img id="lupa" src="{{asset('assets/img/lupa.png')}}" height="25px" width="30px"/>
        </button>
      </div>
  </form>  
<div class="btn-group" style="position: absolute; right:200px;">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" style="background-color: #A2F225; font-weight: bold; color: black; border-radius: 0px;">
                          TEMÁTICA
                        </button>
                        <div class="dropdown-menu" style="background-color: white;border-radius: 0px;">
                          <a class="dropdown-item" href="#" style="font-size: 15px;color: black;">Animales</a>
                          <a class="dropdown-item" href="#" style="font-size: 15px;color: black;border-style: solid;">Familia</a>
                          <a class="dropdown-item" href="#" style="font-size: 15px;color: black;border-style: solid;">Viaje</a>
                          <a class="dropdown-item" href="#" style="font-size: 15px;color: black;">Colegio</a>
                          <a class="dropdown-item" href="#" style="font-size: 15px;color: black;">Televisión</a>
                          <a class="dropdown-item" href="#" style="font-size: 15px;color: black;">Amigos</a>
                        </div>
                      </div>

 
<div id="contenedor">
    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
    <label for="tab-1" class="tab-label-1"><b>PRINCIPAL</b></label>
   
    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
    <label for="tab-2" class="tab-label-2" style="color:#cc0000"><b>PELIGROSAS</b></label>
   
    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
    <label for="tab-3" class="tab-label-3"style="color:#ffd600"><b>NORMALES</b></label>
   
    <input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />
    <label for="tab-4" class="tab-label-4" style="color:green"><b>CORRECTAS</b></label>
                           
    <div class="content">
        
        <div class="content-1">
          @if(count($cartas_buscador) == 0)
            @foreach($cartas_todas as $carta)
            @if($carta->color_car == "Rojo")
              <aside class="cartaCompleta">
              <img src="{{asset('assets/img/rojo.png')}}" height="5px" width="280px">
              <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px;">
              <p>-------------------------------------------<p>  
              </aside>
              @endif
              @if($carta->color_car == "Amarillo")
              <aside class="cartaCompleta">  
              <img src="{{asset('assets/img/amarillo.png')}}" height="5px" width="280px">
              <aside id="contenidoCarta" onclick="alert('LeyendoCarta');">{{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}} </a> <input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 40px; width: 20px; height: 20px; ">
              <p>-------------------------------------------<p>      
              </aside>
              @endif
              
              @if($carta->color_car == "Verde")
              <aside class="cartaCompleta">
              <img src="{{asset('assets/img/verde.png')}}" height="5px" width="280px">
             <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px; ">
               <p>-------------------------------------------<p>  
              </aside>
              @endif
            @endforeach
            
          @else
            @foreach($cartas_buscador as $carta)
              @if($carta->color_car == "Rojo")
              <aside class="cartaCompleta">
              <img src="{{asset('assets/img/rojo.png')}}" height="5px" width="280px">
              <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px;">
              <p>-------------------------------------------<p>  
              </aside>
              @endif
              @if($carta->color_car == "Amarillo")
              <aside class="cartaCompleta">  
              <img src="{{asset('assets/img/amarillo.png')}}" height="5px" width="280px">
              <aside id="contenidoCarta" onclick="alert('LeyendoCarta');">{{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}} </a> <input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 40px; width: 20px; height: 20px; ">
              <p>-------------------------------------------<p>      
              </aside>
              @endif
              
              @if($carta->color_car == "Verde")
              <aside class="cartaCompleta">
              <img src="{{asset('assets/img/verde.png')}}" height="5px" width="280px">
             <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px; ">
               <p>-------------------------------------------<p>  
              </aside>
              @endif
            @endforeach
          @endif
        </table>
<!--
          {{!! $cartas_verdes->links() !!}}    
-->    
      </div>
        
        <div class="content-2">
          
          @foreach($cartas_rojas as $carta)
          <aside class="cartaCompleta">
              <img src="{{asset('assets/img/rojo.png')}}" height="5px" width="280px">
             <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px;">
             <p>-------------------------------------------<p>  
          </aside>
            
          @endforeach
          
        </div>
        
        <div class="content-3">
          
          @foreach($cartas_amarillas as $carta)
          <aside class="cartaCompleta">  
            <img src="{{asset('assets/img/amarillo.png')}}" height="5px" width="280px">
             <aside id="contenidoCarta" onclick="alert('LeyendoCarta');">{{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}} </a> <input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 40px; width: 20px; height: 20px; ">
             <p>-------------------------------------------<p>      
          </aside>
          @endforeach
              
        </div>
       
        <div class="content-4">
          @foreach($cartas_verdes as $carta)
             <aside class="cartaCompleta">
              <img src="{{asset('assets/img/verde.png')}}" height="5px" width="280px">
             <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px; ">
             <p>-------------------------------------------<p>  
          </aside>      
          @endforeach
  
        </div>

    </div>
</div>

 <input type="submit" value="" onclick = "location='#'" style="background-image: url('{{asset('assets/img/botonCrearBoletin.png')}}'); 
              background-size: contain; height: 40px; width: 143px; right: 300px; position: absolute;" />
@endsection

@endif