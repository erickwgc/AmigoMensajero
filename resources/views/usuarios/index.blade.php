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
                        
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/correo">Cartas de niños</a>
          </li>
                        
          <li class="nav-item active">
              <a class="nav-link" href="http://localhost:8000/usuarios" style="text-decoration: underline;">Usuarios</a>
          </li>
                        
          <li class="nav-item ">
              <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
          </li>
         <!-- <li class="nav-item ">
            <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
            </li>
        -->
                    
        </ul>
      </div>
</nav>

<h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA CARTAS DE NIÑOS</h2> 

@endsection
@section("contenido")
<form class="form-inline" style="width:18.7%" action="{{ route('usuarios.index') }}"  method="get">
    <input class="form-control mr-sm-2" id="buscar" name="buscar" type="text" placeholder="Buscar usuario" aria-describedby="buscador">
    <button type="submit" class="btn btn-warning">Buscar</button>
</form>

<!--
<div class="col-8" style="width:30%">
  <div class="input-group">
    <input class="form-control mr-sm-2" id="buscar" type="text" placeholder="Buscar usuario" aria-describedby="buscador">
    <button type="submit" class="btn btn-warning">Buscar</button>
    </div>
</div>
-->
    <br>
    <input type="submit" value="" onclick = "location='/usuarios/create'" 
    style="background-image: url('{{asset('assets/img/botonCrearCuenta.png')}}'); 
                background-size: contain; height: 40px; width: 141px;" />
    <br>
    <input type="submit" value="Asignar rol" onclick = "location='/roles/asignacion'">
    <br>
    
    <table border="1">
        <thead>
            <td>Código</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Modificar</td>
        </thead>
    @foreach($usuarios as $usuario)
        <tr>
            <td><a href="{{route('usuarios.show',$usuario->id)}}">{{$usuario->id}}</a></td>
            <td>{{$usuario->nom_usu}}</td>
            <td>{{$usuario->ape_usu}}</td>
            <td>{{$usuario->email}}</td>
            <td><a href="{{route('usuarios.edit',$usuario->id)}}">Editar</a> 
                
                <!--<form method="post" action="/usuarios/{{$usuario->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" Value="DELETE">
                    <input type="submit" value="Eliminar">
                </form>
                -->
                <a href="{{route('usuario.delete', $usuario->id)}}">Eliminar</a>
                Permisos
            </td>
             
        </tr>
    @endforeach

    {{!! $usuarios->links() !!}}    

    </table>
    
    <script>
      window.addEventListener("load",function(){
        document.getElementById("buscar").addEventListener("keyup",()=>{

            if((document.getElementById("buscar").value.length)>=1)
              fecth('/usuarios/buscador?buscar=${document.getElementById("texto").value}',{ method:'get'})
                .then(response =>response.text())
                .then(html =>{document.getElementById("resultados").innerHTML=html})
            else
              document.getElementById("resultados").innerHTML=""
        })
      })
    </script>
    
@endsection