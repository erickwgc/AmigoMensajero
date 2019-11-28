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
              <a class="nav-link" href="http://localhost:8000/AdminInicio" >Inicio</a>
          </li>
                        
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/correo">Cartas de niños</a>
          </li>
                        
          <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/usuarios">Usuarios</a>
          </li>
                        
          <li class="nav-item ">
              <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="http://localhost:8000/permisos">Permisos</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="http://localhost:8000/profesiones">Profesionales</a>
        </li>
                    
        </ul>
      </div>
</nav>
      <h2 style="color: white;">Esta es la vista de notificaciones</h2>
@endsection