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
                      
                      <li class="nav-item">
                        <a class="nav-link" href="http://localhost:8000/correo">Cartas de niños</a>
                      </li>   
                     <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/usuarios" style="text-decoration: underline;">Usuarios<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/roles">Roles</a>
                      </li>
                        <li class="nav-item ">
                        <a class="nav-link" href="http://localhost:8000/permisos">Permisos</a>
                      </li>
                      
                    </ul>
                  </div>
                </nav>
                <h2 style="color: white;">ESTA ES LA VISTA PARA AÑADIR INFORMACION</h2> 
@endsection
@section("contenido")
<form id="datos_formulario" action="/usuarios" method="post">
    {{csrf_field()}}
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="especialidad">Especialidad</label>
      <input type="text" class="form-control" id="especialidad" placeholder="Especialidad">
    </div>
    <div class="form-group col-md-4">
      <label for="experiencia">Experiencia</label>
      <input type="textarea" class="form-control" id="experiencia" placeholder="Experiencia">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6" >
      <label for="formacion">Formacion</label>
      <input type="text" class="form-control" id="formacion" placeholder="Formacion">
    </div>
    <div class="form-group col-md-2">
      <label for="universidad">Universidad</label>
      <input type="text" class="form-control" id="universidad" placeholder="Universidad">
    </div>
  </div> 
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="años">Años de Experiencia</label>
      <input type="number" class="form-control" id="años" placeholder="AñosdeExperiencia">
    </div>
    <div class="form-group col-md-6">
      <label for="logros">Logros</label>
      <input type="text" class="form-control" id="logros" placeholder="Logros">
    </div>
  </div>3
  <br>
  <button type="submit" class="btn btn-warning">Guardar</button>
</form>
@endsection
@endif