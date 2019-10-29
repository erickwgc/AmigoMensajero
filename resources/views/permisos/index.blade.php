
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
                     
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/usuarios">Usuarios</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
                      </li>
                      
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/permisos" style="text-decoration: underline;">Permisos</a>
                      </li>
                    
                    </ul>
                  </div>
                </nav>
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA PERMISOS</h2> 
@endsection
@section("contenido")
<input type="submit" value="Asignar rol" onclick = "location='/permisos/asignacion'">
<table border="1">
<thead>
<td>Código</td>
<td>nombre_rol</td>
<td>Permisos</td>
<td>Modificar</td>
</thead>
@foreach($roles  as $rol)

    @foreach($rol->permisos as $permiso) 
    <tr>
    <td>{{$permiso->id}}</td>
    <td>{{$rol->nom_rol}}</td>
    <td>{{$permiso->nom_per}}</td>
    <td> edit</td>
  </tr>
    @endforeach

</tr>
@endforeach
</table>
@endsection