<table border="1" class="table table-hover">
        <thead>
            <td>Código</td>
            <td>Nombre de Rol</td>
            <td>Permisos</td>
            <td>Modificar</td>
        </thead>
    @foreach($roles as $role)
        <tr>
            <td>{{$role->id}}</td>
            <td>{{$role->nom_rol}}</td>
            <td>
                @foreach($role->permisos as $permiso)
                   {{$permiso->nom_per}}
                   <br>
                 @endforeach
              </td>
            <td> 
                @if(Auth::user()->getPermisos('eliminar rol'))
                  <a href="#">Eliminar</a>
                @endif
                @if(Auth::user()->getPermisos('editar rol'))
                  <a href="{{route('roles.edit',$role->id)}}">Editar</a>
                @endif
                @if(Auth::user()->getPermisos('ver rol'))
                <a href="#" data-toggle="modal" onclick="return Mostrar('{{$role->nom_rol}}','{{$role->descripcion}}')"
                      data-target="#exampleModal">Ver</a>
                  <!--
                      <a href="{{route('roles.show',$role->id)}}">Ver</a>--> 
                @endif
            </td>
            
        </tr>
    @endforeach
    </table>