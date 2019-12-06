<table border="1" class="table table-hover">
        <thead>
            <td>Código</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Roles</td>
            <td>Modificar</td>
        </thead>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{$usuario->id}}</td>
            <td>{{$usuario->nom_usu}}</td>
            <td>{{$usuario->ape_usu}}</td>
            <td>{{$usuario->email}}</td>

            <td>
              @php
              foreach($usuario->roles as $role){
              echo '<p>'. $role->nom_rol . '</p>';
               }
              @endphp
            </td>
            
            <td>
                @foreach(Auth::user()->roles as $role)
                  @foreach($role->permisos as $permiso)
                    @if($permiso->nom_per  == 'editar usuario')
                        <a href="{{route('usuarios.edit',$usuario->id)}}">Editar</a> 
                    @endif
                  
                    @if($permiso->nom_per  == 'eliminar usuario')
                        <a href="{{route('usuario.delete', $usuario->id)}}">Eliminar</a>
                    @endif
                    @if($permiso->nom_per  == 'ver usuario')
                    <a href="{{route('usuarios.show',$usuario->id)}}">Ver </a>
                    @endif  

                    @endforeach
                
                @endforeach
             </td>
             
            </tr>
      @endforeach

    {{!! $usuarios->links() !!}}    

    </table>
  