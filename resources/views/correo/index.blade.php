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
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/correo" style="text-decoration: underline;">Carta de niños</a>
                      </li>
                     <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/usuarios" >Usuarios<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
                      </li>
                    </ul>
                  </div>
                </nav>
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA CORREO</h2> 
@endsection
@section("contenido")
<form class="form-inline" style="width:18.7%" action="{{ route('usuarios.index') }}"  method="get">
    <input class="form-control mr-sm-2" id="buscar" name="buscar" type="text" placeholder="Buscar carta" aria-describedby="buscador">
    <button type="submit" class="btn btn-warning">Buscar</button>
</form>

<br>    
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
          
          @foreach($cartas_todas as $carta)
              <p> {{$carta->contenido}} &nbsp {{$carta->fecha}} &nbsp {{$carta->hora}}<p>
              <p>-------------------------------------------<p> 
          @endforeach
          
        </table>
<!--
          {{!! $cartas_verdes->links() !!}}    
-->    
      </div>
        
        <div class="content-2">
          @foreach($cartas_rojas as $carta)
             <p> {{$carta->contenido}} &nbsp {{$carta->fecha}} &nbsp {{$carta->hora}}<p>
             <p>-------------------------------------------<p>      
          @endforeach
          
        </div>
        
        <div class="content-3">
          @foreach($cartas_amarillas as $carta)
             <p> {{$carta->contenido}} &nbsp {{$carta->fecha}} &nbsp {{$carta->hora}}<p>
             <p>-------------------------------------------<p>      
          @endforeach
              
        </div>
       
        <div class="content-4">
          @foreach($cartas_verdes as $carta)
             <p> {{$carta->contenido}} &nbsp {{$carta->fecha}} &nbsp {{$carta->hora}}<p>
             <p>-------------------------------------------<p>      
          @endforeach
  
        </div>

    </div>
</div>

@endsection

@endif