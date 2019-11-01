<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom_usu', 'ape_usu', 'email', 'fecha_nac','tel_usu','username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
    
    public function roles(){
        //return $this->belongsToMany('App\Role','role_user','user_id','role_id');
        return $this->belongsToMany('App\Role');

    }
    public function scopeBuscar($query,$buscar){   
        
        //return $query->where('nom_usu','LIKE','%' . $buscar . '%');
        return $query->where('nom_usu','LIKE','%' . $buscar . '%')
                    ->orWhere('ape_usu','LIKE','%' . $buscar . '%')
                    ->orWhere('email','LIKE','%' . $buscar . '%');
        
    }

    public function getRolesList(){
        return $this->roles->list('id')->all();
    }

}
