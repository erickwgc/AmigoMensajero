<?php

namespace App\Http\Middleware;
use App\User;
use App\Role;
use Closure;

class MDadministrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user_id = \Auth::user();
       // $usuario = User::find($user_id->id)->roles()->where('nom_rol','administrador')->first();  
       // $id =  $usuario->pivot->role_id;
       // $rol = Role::find($id)->nom_rol;
       foreach ($user_id->roles as $role) {
        $rol  = $role->nom_rol ;
    }
       
       if($rol == 'administrador'){
            return $next($request);
        }
        return redirect('login');
    }
    
}
