
@if($carta->color_car == "Rojo")
    
    <aside class="cartaCompleta">

    <img src="{{asset('assets/img/rojo.png')}}" height="5px" width="280px">
    <a href="#" onClick="Mostrar( '{{$carta->autor}}','{{$carta->hora}}','{{$carta->fecha}}','{{$carta->contenido}}');"  
    data-toggle="modal" data-target="#exampleModal">[ver carta]</a> 

    <aside id="contenidoCarta"> {{$carta->contenido}} </aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}
    </a><input type="checkbox" name="cont_principal_rojas[]" value="{{$carta->cod_car}}" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px;">
    
    <p>-------------------------------------------<p> 
    </aside>
@endif
    
@if($carta->color_car == "Amarillo")
    <aside class="cartaCompleta">  
    <img src="{{asset('assets/img/amarillo.png')}}" height="5px" width="280px">
   
    <a href="#" onClick="Mostrar( '{{$carta->autor}}','{{$carta->hora}}','{{$carta->fecha}}','{{$carta->contenido}}' );" data-toggle="modal" 
    data-target="#exampleModal">[ver carta]</a>
   
    <aside id="contenidoCarta" onclick="alert('LeyendoCarta');">{{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}} </a> <input type="checkbox" name="cont_principal_amarillas[]" value="{{$carta->cod_car}}" style="position: relative !important; visibility: visible !important; margin-left: 40px; width: 20px; height: 20px; ">
    <p>-------------------------------------------<p>      
    </aside>
@endif
    
@if($carta->color_car == "Verde")
    <aside class="cartaCompleta">
    <img src="{{asset('assets/img/verde.png')}}" height="5px" width="280px">
    <a href="#" onClick="Mostrar( '{{$carta->autor}}','{{$carta->hora}}','{{$carta->fecha}}','{{$carta->contenido}}' );" data-toggle="modal" 
    data-target="#exampleModal">[ver carta]</a>

    <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" name="cont_principal_verdes[]" value="{{$carta->cod_car}}"
    style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px; ">
    <p>-------------------------------------------<p>
  
    </aside>
@endif


