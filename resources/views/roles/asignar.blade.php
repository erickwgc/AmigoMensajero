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
            
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/permisos">Permisos</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="http://localhost:8000/profesionales">Profesionales</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<h2 style="color: white;">ESTA ES LA VISTA DE USUARIOS/ASIGNAR ROL</h2> 
@endsection

@section("contenido")

<form action="/roles/asignacion/unir" method="post">
    {{csrf_field()}}

  <div class="form-group">
    <label for="exampleFormControlSelect1" style="color:#FFFFFF;margin-left: 2%;">Seleccionar usuario</label>
    <select class="form-control" id="exampleFormControlSelect1" name="user_id" style="width:50%;margin-left: 10%;">
        @foreach($usuarios as $usuario)       
            <option value="{{$usuario->id}}">{{$usuario->nom_usu}} {{$usuario->ape_usu}} </option>
         @endforeach
    </select>
  </div>
<br>

<label for="idCampo" style="color:#FFFFFF; margin-left: 2%;">Seleccionar Rol</label> 
  @foreach($roles as $role)
    <div class="form-group form-check" form="roles" id="idCampo"  style="margin-left: 10%;">
        <input type="checkbox" class="form-check-input" id="rol" name="roles[]" value="{{$role->id}}">
        <label class="form-check-label" for="exampleCheck1">{{$role->nom_rol}}</label>
    </div>
  @endforeach

  <br>
  <input type="submit" name="enviar" value="Guardar asignación" 
      class="btn btn-warning" style="margin-left: 2%;">
      
  <!--
  <input type="submit" name="enviar" id="enviar" value=""
      style="background-image: url('{{asset('assets/img/botonGuardarAsignacion.png')}}'); 
                          background-size: cover; height: 40px; width: 241px;
                          margin-top: 50px; margin-left: 30px;">

-->
</form>

@endsection