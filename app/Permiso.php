<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $fillable = ["nom_permiso","descripcion"];
    
    public function usuarios(){
        //return $this->belongsToMany('App\User','role_user','role_id','user_id');
        return $this->belongsToMany('App\Role');

    }
}
