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
    

    <table border="1">
        <thead>
            <td>Contenido</td>
            <td>autor</td>
            <td>fecha</td>
            <td>hora</td>
        </thead>
    @foreach($cartas as $carta)
        <tr>
            <td>{{$carta->contenido}}</td>
            <td>{{$carta->autor}}</td>
            <td>{{$carta->fecha}}</td>
            <td>{{$carta->hora}}</td>
            
        </tr>
    @endforeach

    </table>
@endsection

@endif