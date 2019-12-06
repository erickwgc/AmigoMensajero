@extends("../layout/plantilla")
@section("cabecera")
  @include("../usuarios/menu")
  <br>
  <h2 style="color: white;">ESTA ES LA VISTA DE USUARIOS</h2> 
  <br>
@endsection
@section("contenido")

  <form id="formularioBuscadorCartas" action="{{ route('usuarios.index') }}"  method="get">
      <div style="position: absolute;right: 200px; background-color: white; width: 220px;">  
        <input id="buscar" name="buscar" type="text" placeholder="Buscar usuario" aria-describedby="buscador" style="border: 0px;">
        <button type="submit" style=" background-color: white;">
          <img id="lupa" src="{{asset('assets/img/lupa.png')}}" height="25px" width="30px"/>
        </button>
      </div>
  </form>

  @if(Auth::user()->getPermisos('crear usuario'))
  
  <input type="submit" name="enviar" value="Crear Cuenta" onclick = "location='/usuarios/create'"
      class="btn btn-warning" style="margin-left: 15%;">

  <input type="submit" name="enviar" value="Asignar Roles" onclick = "location='/roles/asignacion'"
      class="btn btn-warning" style="margin-left: 15%;">
  
  @endif
  <br><br>
  
  <!--
    @if(Auth::user()->getPermisos('crear usuario'))
    <input type="submit" value="" onclick = "location='/usuarios/create'" 
      style="background-image: url('{{asset('assets/img/botonCrearCuenta.png')}}'); 
                background-size: contain; height: 40px; width: 143px; margin-top: 30px;margin-left: 200px; margin-bottom: 10px;" />

    <input type="submit" value="" onclick = "location='/roles/asignacion'" style="background-image: url('{{asset('assets/img/botonAsignarRoles.png')}}'); 
                background-size: contain; height: 40px; width: 143px;margin-left: 200px;margin-bottom: 10px;">
     @endif  
-->

  
<!---TABLA DE USUARIOS-->
       @include("../usuarios/tabla_usuarios")

  @endsection     