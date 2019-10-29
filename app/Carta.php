<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable = ["nom", "contenido", "fecha","color_car"];
    
    public function imagenes(){
    	return $this->hasMany('App\Imagen', 'cod_car');
    }
    
    public function scopeCartas($query, $color){

        return $query->where('color_car',$color);
    }

    

}
