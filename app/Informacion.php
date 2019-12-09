<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Informacion extends Model
{
    protected $fillable = ['id_usu','especialidad','ani_esp','experiencia','formacion','uni_egr','logros','perfil','curiculon'];
}