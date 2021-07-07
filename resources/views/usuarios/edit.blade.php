@extends("../layout/plantilla")
@section("cabecera")
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
<<<<<<< HEAD
                        <a class="nav-link" href="http://localhost:8000/inicio" >Inicio</a>
=======
                        <a class="nav-link" href="http://localhost:8000/AdminInicio" >Inicio</a>
>>>>>>> 8898a0fbd319b4d830fd0112b96742e3705ffd6e
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/correo">Cartas de niños</a>
                      </li>    
                     
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/usuarios" style="text-decoration: underline;">Usuarios<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
                      </li>
                    </ul>
                  </div>
                </nav>
<h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA USUARIOS/editarusuario</h2> 
@endsection
@section("contenido")

<form action="/usuarios/{{$usuario->id}}" method="post">
<table>

<tr>
<td>Nombre: </td>
<td><input type="text" name="nom_usu" value="{{$usuario->nom_usu}}">
    {{csrf_field()}}
</td>
</tr>
<input type="hidden" name="_method" value="PUT">
<tr>
<td>Apellido: </td>
<td><input type="text" name="ape_usu" value="{{$usuario->ape_usu}}">
</td>
</tr>

<tr>
<td>Correo: </td>
<td><input type="text" name="correo" value="{{$usuario->email}}">
</td>
</tr>

<tr>
<td>Fecha nacimiento:: </td>
<td><input type="text" name="fecha_nac" value="{{$usuario->fecha_nac}}">
</td>
</tr>

<tr>
<td>Telefono: </td>
<td><input type="text" name="tel_usu" value="{{$usuario->tel_usu}}">
</td>
</tr>

<tr>
<td>Rol</td>
<td>
  <select name="role_id">
    @foreach($roles as $role)
      <option value="{{$role->id}}">{{$role->nom_rol}}</option>
    @endforeach
  </select>
</td>
</tr>

<tr><td colspan="2" align="center">
<input type="submit" name="enviar" value="Enviar">
</td></tr>
</table>
</form>

@endsection