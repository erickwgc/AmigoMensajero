<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = ["nom", "contenido", "fecha"];
    
    public function imagenes(){
    	return $this->hasMany('App\Imagen', 'cod_car');
    }
}
