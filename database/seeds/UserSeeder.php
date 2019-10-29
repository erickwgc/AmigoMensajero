<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol = new Role();
        $rol->nom_rol='administrador';
        $rol->descripcion='Para gestionar usuarios';
        $rol->save();
        $user = new User();
        $user->nom_usu = 'wilder';
        $user->ape_usu = 'perez';
        $user->email = 'admin@admin.com';
        $user->fecha_nac = '2000-03-08';
        $user->tel_usu = '76483633';
        $user->username = 'admin';

        $user->password = crypt('12345','');
        
        $user->save();
        $user->roles()->attach($rol);
    }
}
