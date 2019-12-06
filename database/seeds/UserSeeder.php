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
        $role_user = Role::where('nom_rol','user')->first();
        $role_admin = Role::where('nom_rol','administrador')->first();

        $user = new User();
        $user->nom_usu = 'Admin';
        $user->ape_usu = 'Admin';
        $user->email = 'admin@admin.com';
        $user->fecha_nac = '2000-03-08';
        $user->tel_usu = '76483633';
        $user->username = 'admin';
      


        $user->password = crypt('12345','');
        $user->save();

        $user->roles()->attach($role_admin);

        $user = new User();
        $user->nom_usu = 'Jose';
        $user->ape_usu = 'Soliz';
        $user->email = 'jose@gmail.com';
        $user->fecha_nac = '1997-03-08';
        $user->tel_usu = '76789532';
        $user->username = 'josee1';
      


        $user->password = crypt('54321','');
        $user->save();
        $user->roles()->attach($role_user);

    }
}
