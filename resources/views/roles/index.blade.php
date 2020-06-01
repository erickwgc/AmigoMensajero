@extends("../layout/plantilla")
@section("cabecera")
    @include("../roles/menu")
    <h2 style="color: white;">ESTA ES LA VISTA DE ROLES </h2> 
@endsection

@section("contenido")
  @if(Auth::user()->getPermisos('crear rol'))
    <!--
    <input type="submit" value="" onclick = "location='/roles/create'"
     style="background-image: url('{{asset('assets/img/botonCrearRol.png')}}'); 
                background-size: contain; height: 40px; width: 143px;margin-left: 200px;
                margin-bottom: 10px; margin-top: 30px;" />
-->
<br>
    <input type="submit" name="enviar" value="Crear Rol" onclick = "location='/roles/create'"
      class="btn btn-warning" style="margin-left: 15%;">
      &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value="Asignar Permiso"  onclick = "location='/permisos/asignacion'"
      class ="btn btn-warning" style="margin-left: 15%;">

    <br><br>

  @endif   

<!--TABLA DE ROLES-->
  @include("../roles/tabla_roles")

<!--MOSTRAR CON MODAL El ROL SELECCIONADO-->
    @include("../roles/mostrar_rol")
 <script>
    var Mostrar = function(rol,descripcion)
      {  
        $('#nombre_rol').val(rol);
        $('#descripcion_rol').val(descripcion);
      }    
    </script>
@endsection

