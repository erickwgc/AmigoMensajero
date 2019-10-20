<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ["nom_rol","descripcion"];
    
    public function usuarios(){
        //return $this->belongsToMany('App\User','role_user','role_id','user_id');
        return $this->belongsToMany('App\User');

    }
}
