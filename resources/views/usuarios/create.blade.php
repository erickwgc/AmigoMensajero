@extends("../layout/plantilla")

@section("cabecera")
  @include("../usuarios/menu")
  <h2 style="color: white;">ESTA ES LA VISTA DE USUARIOS/CREAR</h2> 

@endsection

@section("contenido")

<script>
$(document).ready(function(){
   $("#datos_formulario").validate();
 });
</script>

<form id="datos_formulario" action="/usuarios" method="post" style="background: transparent; width: 90%;" onsubmit="return validar();">
{{csrf_field()}}

<table style="font-size: 16px;font-weight: bold; background: transparent; width: 90%;margin: 20px auto;">

<tr>
<td id="idCampo">Nombre: </td>
<td><input type="text" name="nom_usu" class="form-control" placeholder="Nombre" id="nom_usu"   required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,30}"
         title="Solo letras. Tamaño mínimo: 3. Tamaño máximo: 30">
  
    {{csrf_field()}}
</td>

<td id="idCampo">Usuario: </td>
<td><input type="text" class="form-control" name="usuario"  placeholder="Usuario"  required title="no puede dejar vacio" >
</td>

</tr>
<tr>
<td id="idCampo">Apellido: </td>
<td><input type="text"  class="form-control" name="ape_usu" placeholder="Apellido" required pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{3,64}" title="Tamaño minimo 3 caracteres y maximo 64 caracteres">
</td>

<td id="idCampo">Contraseña: </td>
<td><input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña"
                  pattern="[A-Za-z0-9!?-]{4,15}" required title="letras Mayusculas,minusculas y caracteres  !?-. Tamaño  4-15" >
</td>
</tr>

<tr>
<td id="idCampo">Correo: </td>
<td><input type="email"  class="form-control" name="correo" placeholder="Correo" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
</td>

<td id="idCampo">Confirmar Contraseña: </td>
<td><input type="password" class="form-control" name="confirmcontrasenia" id="confirmcontrasenia" placeholder="Confirmar Contraseña"
                  pattern="[A-Za-z0-9!?-]{4,15}" title="letras Mayusculas,minusculas y caracteres  !?-. Tamaño  4-15" required >
</td>

</tr>
<tr>
<td id="idCampo">Fecha nacimiento: </td>
<td><input type="date" class="form-control" name="fecha_nac" required min="1550-02-20" max="2015-04-24">
</td>

<td id="idCampo"><span id="error1" style="margin-left: 50px;"></span></td>

</tr>

<tr>
<td id="idCampo">Telefono: </td>
<td><input type="tel"  class="form-control" name="tel_usu" placeholder="Telefono" required  title="Solo numeros " >
</td>

</tr>
  <th>
    
    <td colspan="2" align="center">
    <input type="submit" name="enviar" id="enviar" value="Registrar Cuenta" 
      class="btn btn-warning" style="margin-left: 15%;">
<!--
      <input type="submit" name="enviar" id="enviar" value=""  
      style="background-image: url('{{asset('assets/img/botonRegistrarCuenta.png')}}'); 
                  background-size: contain; height: 40px; width: 209px;margin-top: 50px; 
                  margin-left: 30px;">-->
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