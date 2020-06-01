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
                          <a class="nav-link" href="http://localhost:8000/permisos" style="text-decoration: underline;">Permisos</a>
                      </li>
                     
                    </ul>
                  </div>
                </nav>
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA ROLES/asignar permisos</h2> 
@endsection
@section("contenido")

<form action="/permisos/asignacion/ui" method="post">
    {{csrf_field()}}


    <div class="form-group">
    <label for="exampleFormControlSelect1" style="color:#FFFFFF;margin-left: 2%;">Rol:</label>
    <select class="form-control" id="exampleFormControlSelect1" name="role_id" style="width:50%;margin-left: 10%;">
        <option value="vacio">    </option>
        @foreach($roles as $rol)
        <option value="{{$rol->id}}">{{$rol->nom_rol}} </option>       
         @endforeach
    </select>
  </div>
<br>

<label for="idCampo" style="color:#FFFFFF; margin-left: 2%;">Permisos</label> 
  @foreach($permisos as $permiso)
  <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
    <div class="form-group form-check" form="roles" id="idCampo"  style="margin-left: 10%;">
        <input type="checkbox" class="form-check-input" id="rol" name="permisos[]" value="{{$permiso->id}}">
        <label class="form-check-label" for="exampleCheck1">{{$permiso->nom_per}}</label>
    </div>
  </div>
  @endforeach

  <br>
  <input type="submit" name="enviar" value="Guardar asignación" 
      class="btn btn-warning" style="margin-left: 5%;">
     

    <!-- 
    <table style="background-color: transparent;">
    <tr>
    <td id="idCampo">Rol</td>
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
    <td id="idCampo">Permisos</td>
      <td>
        <br>
        @foreach($permisos as $permiso)
        
        <label for="permisos" style="color: white;">
            <input type="checkbox" id="permiso" name="permisos[]" value="{{$permiso->id}}" style=" margin-right: 10px;">{{$permiso->nom_per}}
        </label>
        <br>
        @endforeach
      </td>
    </tr>
     
    <th>
        <td colspan="2" align="center">
          <input type="submit" name="enviar" id="enviar" value=""style= "background-image: url('{{asset('assets/img/botonGuardarAsignacion.png')}}'); 
                          background-size: cover; height: 40px; width: 241px;margin-top: 50px; margin-left: 30px;">
        </td>
    </th>
    
</table>
-->
</form>
@endsection