<?php

use Illuminate\Database\Seeder;
use App\Permiso;
class PermisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permiso = new Permiso();
        $permiso->nom_per = "eliminar usuario";
        $permiso->descripcion = "puede eliminar cualquier usuario en el sistema";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nom_per = "editar usuario";
        $permiso->descripcion = "puede editar cualquier usuario en el sistema";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nom_per = "crear usuario";
        $permiso->descripcion = "puede crear  cualquier usuario en el sistema";
        $permiso->save();
    
        $permiso = new Permiso();
        $permiso->nom_per = "ver usuario";
        $permiso->descripcion = "puede ver todos los usario registrado";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nom_per = "eliminar rol";
        $permiso->descripcion = "puede eliminar cualquier rol en el sistema";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nom_per = "editar rol";
        $permiso->descripcion = "puede editar cualquier rol en el sistema";
        $permiso->save();

        $permiso = new Permiso();
        $permiso->nom_per = "crear rol";
        $permiso->descripcion = "puede crear cualquier rol en el sistema";
        $permiso->save();
        
        $permiso = new Permiso();
        $permiso->nom_per = "ver rol";
        $permiso->descripcion = "puede ver todos los rol registrado";
        $permiso->save();

        
    }
}
