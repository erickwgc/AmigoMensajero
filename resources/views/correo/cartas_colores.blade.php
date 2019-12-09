
@if($carta->color_car == "Rojo")
    
    <aside class="cartaCompleta">

    <img src="{{asset('assets/img/rojo.png')}}" height="5px" width="280px">
    <a href="#" onClick="return Mostrar( '{{$carta->autor}}','{{$carta->hora}}','{{$carta->fecha}}');"  
    data-toggle="modal" data-target="#exampleModal">[ver carta]</a>

    <!--
    @php 
        $contenido=$carta->contenido;
        $fila="<a href='#' onclick='ver(". $contenido . ");'\">";
        $fila.="ver";
        $fila.="</a>";
        echo $fila;
    @endphp-->
    <aside id="contenidoCarta"> {{$carta->contenido}} </aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}
    </a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px;">
    
    <p>-------------------------------------------<p> 
    </aside>
@endif
    
@if($carta->color_car == "Amarillo")
    <aside class="cartaCompleta">  
            <a href="#" onClick="Mostrar( '{{$carta->autor}}','{{$carta->hora}}','{{$carta->fecha}}' );" data-toggle="modal" 
                    data-target="#exampleModal">[ver carta]</a>
    <img src="{{asset('assets/img/amarillo.png')}}" height="5px" width="280px">
   
    <a href="#" onClick="Mostrar( '{{$carta->contenido}}','{{$carta->hora}}','{{$carta->fecha}}' );" data-toggle="modal" 
    data-target="#exampleModal">[ver carta]</a>
   
    <aside id="contenidoCarta" onclick="alert('LeyendoCarta');">{{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}} </a> <input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 40px; width: 20px; height: 20px; ">
    <p>-------------------------------------------<p>      
    </aside>
@endif
    
@if($carta->color_car == "Verde")
    <aside class="cartaCompleta">
    <img src="{{asset('assets/img/verde.png')}}" height="5px" width="280px">
    <a href="#" onClick="Mostrar( '{{$carta->autor}}','{{$carta->hora}}','{{$carta->fecha}}' );" data-toggle="modal" 
    data-target="#exampleModal">[ver carta]</a>

    <aside id="contenidoCarta"> {{$carta->contenido}}</aside><a id="fechaHoraCarta">{{$carta->fecha}} &nbsp {{$carta->hora}}</a><input type="checkbox" style="position: relative !important; visibility: visible !important; margin-left: 20px; width: 20px; height: 20px; ">
    <p>-------------------------------------------<p>
  
    </aside>
@endif


