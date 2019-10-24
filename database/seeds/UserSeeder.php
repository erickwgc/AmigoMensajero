<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->nom_usu = 'wilder';
        $user->ape_usu = 'perez';
        $user->email = 'admin@admin.com';
        $user->fecha_nac = '2000-03-08';
        $user->tel_usu = '76483633';
        $user->username = 'admin';
      


        $user->password = crypt('12345678');
        $user->save();
    }
}
