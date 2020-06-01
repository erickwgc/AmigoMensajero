<h1>{{$rol->nom_rol}} </h1>
<h1>{{$rol->descripcion}} </h1>
@foreach ($rol->permisos as $permiso)
    <h1>{{$permiso->nom_per}}</h1>
    <h1>{{$permiso->descripcion}}</h1>
@endforeach