@extends("../layout/plantilla")
@section("cabecera")
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/AdminInicio" >Inicio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/usuarios">Usuarios</a>
                      </li>
                       <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/roles" style="text-decoration: underline;">Roles</a>
                      </li>
                    </ul>
                  </div>
                </nav>
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA ROLES/crea roles</h2> 
@endsection
@section("contenido")

<form action="/roles" method="post" style="background: transparent; width: 90%;">
<table style="font-size: 16px;font-weight: bold; background: transparent; width: 90%;margin: 20px auto;">

<tr>
<td id="idCampo">Nombre de rol: </td>
<td><input type="text" name="nom_rol" required pattern="[A-Za-z]{5,40}" title="solo letras Mayusculas y minusculas tamaño: 5-40 caracteres">
    {{csrf_field()}}
</td>
</tr>

<tr>
<td id="idCampo">Descripcion del rol: </td>
<td><input type="text" name="descripcion" required pattern="[A-Za-z0-9]{2,200}" title="Letras y numeros tamaño: 2-200 caracteres">
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="enviar" value="" style="background-image: url('{{asset('assets/img/botonGuardarRol.png')}}'); 
                background-size: contain; height: 60px; width: 211px;margin-top: 50px; margin-left: 30px;">
</td>
</tr>
</table>
</form>
@endsection