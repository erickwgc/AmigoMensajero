<h1>{{$rol->nom_rol}} </h1>
<a>{{$rol->descripcion}} </a>
@foreach ($rol->permisos as $permiso)
    <h1>{{$permiso->nom_per}}</h1>
    <a>{{$permiso->descripcion}}</a>
@endforeach