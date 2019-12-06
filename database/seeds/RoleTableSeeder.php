<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nom_rol = "administrador";
        $role->descripcion = "Administrador";
        $role->save();

		$role = new Role();
        $role->nom_rol = "user";
        $role->descripcion = "User";
        $role->save();
    }
}
