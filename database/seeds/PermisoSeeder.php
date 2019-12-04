<?php
use App\Role;
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
        $permiso1 = new Permiso();
        $permiso1->nom_per = "eliminar usuario";
        $permiso1->descripcion = "puede eliminar cualquier usuario en el sistema";
        $permiso1->save();

        $permiso2 = new Permiso();
        $permiso2->nom_per = "editar usuario";
        $permiso2->descripcion = "puede editar cualquier usuario en el sistema";
        $permiso2->save();

        $permiso3 = new Permiso();
        $permiso3->nom_per = "crear usuario";
        $permiso3->descripcion = "puede crear  cualquier usuario en el sistema";
        $permiso3->save();
    
        $permiso4 = new Permiso();
        $permiso4->nom_per = "ver usuario";
        $permiso4->descripcion = "puede ver todos los usario registrado";
        $permiso4->save();

        $permiso5 = new Permiso();
        $permiso5->nom_per = "eliminar rol";
        $permiso5->descripcion = "puede eliminar cualquier rol en el sistema";
        $permiso5->save();

        $permiso6 = new Permiso();
        $permiso6->nom_per = "editar rol";
        $permiso6->descripcion = "puede editar cualquier rol en el sistema";
        $permiso6->save();

        $permiso7 = new Permiso();
        $permiso7->nom_per = "crear rol";
        $permiso7->descripcion = "puede crear cualquier rol en el sistema";
        $permiso7->save();
        
        $permiso8 = new Permiso();
        $permiso8->nom_per = "ver rol";
        $permiso8->descripcion = "puede ver todos los rol registrado";
        $permiso8->save();

        $rol = Role::find(1);
        $rol->permisos()->attach($permiso1);
        $rol->permisos()->attach($permiso2);
        $rol->permisos()->attach($permiso3);
        $rol->permisos()->attach($permiso4);
        $rol->permisos()->attach($permiso5);
        $rol->permisos()->attach($permiso6);
        $rol->permisos()->attach($permiso7);
        $rol->permisos()->attach($permiso8);        
    }
}
