@extends("../layout/plantilla")
@section("cabecera")
@endsection
@section("contenido")
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(255,192,0);">
                  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/usuarioGeneral" >Inicio</a>
                      </li>
                    
                    </ul>
                  </div>
                </nav>
            </div>

            <h1>{{Auth::user()->id}}</h1>
            <h2>{{Auth::user()->roles}}</h2>
            <h3>{{Auth::user()->ape_usu}}</h3>
            
@endsection