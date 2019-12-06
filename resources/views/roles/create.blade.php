@extends("../layout/plantilla")
@section("cabecera")
    @include("../roles/menu")
    <h2 style="color: white;">ESTA ES LA VISTA DE ROLES/CREAR</h2> 
@endsection
@section("contenido")
<br>
<form action="/roles" method="post" style="background: transparent; width: 90%;">
{{csrf_field()}}
<div class="form-group row">
    <label for="nombre_rol" class="col-sm-2 col-form-label" id="idCampo">Nombre de Rol: </label>
    <div class="col-sm-10">
      <input type="text" name="nom_rol" class="form-control" id="nombre_rol" style="width: 30%" required>
    </div>
  </div>

  <div class="form-group row">
    <label for="descripcion_rol" class="col-sm-2 col-form-label" id="idCampo">Descripcion de Rol: </label>
    <div class="col-sm-10">
    <textarea class="form-control" name="descripcion" id="descripcion_rol" rows="4" style="width: 40%"></textarea>
    </div>
  </div>
<br>
  <input type="submit" value="Guardar Rol"  
      class ="btn btn-warning" style="margin-left: 20%;">

<!--
<table style="font-size: 16px;font-weight: bold; background: transparent; width: 90%;margin: 20px auto;">

<tr>
<td id="idCampo">Nombre de rol: </td>
<td><input type="text" name="nom_rol" required pattern="[A-Za-z]{5,40}" title="solo letras Mayusculas y minusculas tamaño: 5-40 caracteres">
    {{csrf_field()}}
</td>
</tr>

<tr>
<td id="idCampo">Descripcion del rol: </td>
<td>
    
-->
<!--<input type="text" name="descripcion" required pattern="[A-Za-z0-9]{2,200}" title="Letras y numeros tamaño: 2-200 caracteres">-->
<!--
<input type="text" name="descripcion" required>
</td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" name="enviar" value="" style="background-image: url('{{asset('assets/img/botonGuardarRol.png')}}'); 
                background-size: contain; height: 40px; width: 189px;margin-top: 50px; margin-left: 30px;">
</td>
</tr>
</table>
-->
</form>
@endsection