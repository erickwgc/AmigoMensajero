<?php

namespace App\Http\Middleware;
use App\User;
use App\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

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
        $admin = false;
        $rol = "";
        if(Auth::check()){
            $user_id = \Auth::user();
                foreach ($user_id->roles as $role) {
                    $rol  = $role->nom_rol ;
                    if($rol == "administrador"){
                        $admin = true;
                    }
                }
        }       
        

        if($admin){
            return $next($request);
        }
        return redirect('login');
    }
    
}
