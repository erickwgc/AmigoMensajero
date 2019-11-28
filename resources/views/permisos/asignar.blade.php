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
                     
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/usuarios" >Usuarios</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link" href="http://localhost:8000/permisos" style="text-decoration: underline;">Permisoso</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/profesiones">Profesiones</a>
                      </li>
                    </ul>
                  </div>
                </nav>
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA USUARIOS/crearusuario</h2> 
@endsection
@section("contenido")
<h1> asignacion de permisoso </h1>
<form action="/permisos/asignacion/ui" method="post">
    {{csrf_field()}}
    <table>
    <tr>
    <td>Rol</td>
    <td>
      <select name="role_id" >
          <option value="vacio">    </option>
        @foreach($roles as $rol)
          <option value="{{$rol->id}}">{{$rol->nom_rol}} </option>
        @endforeach
      </select>
    </td>
    </tr>
     
    <tr>
    <td>Permisos</td>
      <td>
        @foreach($permisos as $permiso)
        
        <label for="permisos">
            <input type="checkbox" id="permiso" name="permisos[]" value="{{$permiso->id}}">{{$permiso->nom_per}}
        </label>
        <br>
        @endforeach
      </td>
    </tr>
     
    <th>
        <td colspan="2" align="center">
          <input type="submit" name="enviar" id="enviar" value="ASIGNAR"style= background-size: cover; height: 40px; width: 241px;margin-top: 50px; margin-left: 30px;>
        </td>
    </th>
    
</table>
</form>
@endsection