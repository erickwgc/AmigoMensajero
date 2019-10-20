@if (Auth::guest())
  <script>window.location = "/login";</script>
@else
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
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/carta">Escribe tu Carta</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/boletin">Boletín</a>
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
                <h2 style="color: white;">ESTA ES LA VISTA DE AMINISTRADOR-PESTAÑA USUARIOS/crearusuario</h2> 
@endsection
@section("contenido")




<script>

 $(document).ready(function(){
   
   
   $("#datos_formulario").validate();
            
        
   
   
 });
  


</script>

<form id="datos_formulario" action="/usuarios" method="post" style="background: transparent; width: 90%;" onsubmit="return validar();">
<table style="font-size: 16px;font-weight: bold; background: transparent; width: 90%;margin: 20px auto;">

<tr>
<td id="idCampo">Nombre: </td>
<td><input type="text" name="nom_usu" placeholder="Nombre" id="nom_usu"   required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,30}"
         title="Solo letras. Tamaño mínimo: 3. Tamaño máximo: 30">
  
    {{csrf_field()}}
</td>

<td id="idCampo">Usuario: </td>
<td><input type="text" name="usuario" pattern="^([a-z]+[0-9]{0,5}){5,12}$" required title="solo letras minusculas y con un numero opcionalmente de hasta 5 digitos : Tamaño 5-12" >
</td>

</tr>
<tr>
<td id="idCampo">Apellido: </td>
<td><input type="text" name="ape_usu" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,64}" title="Tamaño minimo 3 caracteres y maximo 64 caracteres">
</td>

<td id="idCampo">Contraseña: </td>
<td><input type="password" name="contrasenia" id="contrasenia" placeholder="Contraseña"
                  pattern="[A-Za-z0-9!?-]{8,12}" required title="letras Mayusculas,minusculas y caracteres  !?-. Tamaño  8-12" >
</td>


</tr>

<tr>
<td id="idCampo">Correo: </td>
<td><input type="email" name="correo"  pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
</td>

<td id="idCampo">Confirmar Contraseña: </td>
<td><input type="password" name="confirmcontrasenia" id="confirmcontrasenia" placeholder="Confirmar Contraseña"
                  pattern="[A-Za-z0-9!?-]{8,12}" title="letras Mayusculas,minusculas y caracteres  !?-. Tamaño  8-12" required >
</td>



</tr>



<tr>
<td id="idCampo">Fecha nacimiento: </td>
<td><input type="date" name="fecha_nac" required min="1550-02-20" max="2015-04-24">
</td>

<td id="idCampo"><span id="error1" style="margin-left: 50px;"></span></td>

</tr>

<tr>
<td id="idCampo">Telefono: </td>
<td><input type="tel" name="tel_usu"  required  title="Solo numeros " >
</td>

<td id="idCampo">Rol</td>
<td>
  <select name="nom_rol">
    @foreach($roles as $role)
      <option value="{{$role->nom_rol}}">{{$role->nom_rol}}</option>
    @endforeach
  </select>
</td>


</tr>




  <th>
    
    <td colspan="2" align="center">
      <input type="submit" name="enviar" id="enviar" value=""  style="background-image: url('{{asset('assets/img/botonRegistrarCuenta.png')}}'); 
                  background-size: cover; height: 40px; width: 241px;margin-top: 50px; margin-left: 30px;">
    </td>
  </th>
</table>



</form>









  
<script type="text/javascript">
      
  

  function validar()
  {

     var contra=document.getElementById("contrasenia").value;
     var confcontra=document.getElementById("confirmcontrasenia").value;

     if (contra!=confcontra) {


        return document.getElementById("enviar").onsubmit=false;

     }else{


      return document.getElementById("enviar").onsubmit=true;;
     }

  }




  $(document).ready(function(){

    $('#confirmcontrasenia').keyup(function(){

     var pas1=$('#contrasenia').val();
     var pas2=$('#confirmcontrasenia').val();

     if (pas1==pas2) {

            $('#error1').text("coinciden!").css("color","#A2ED96");

     }else{

          $('#error1').text("No coinciden!").css("color","rgb(255,192,0)");

     }

     if (pas2=="") {

        
            $('#error1').text("no puede estar en blanco").css("color","rgb(255,192,0)");
     }
     


  });


});



  



</script>


@endsection
@endif