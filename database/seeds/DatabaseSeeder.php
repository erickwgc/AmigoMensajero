<?php

use Illuminate\Database\Seeder;
use App\Permiso;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(PermisoSeeder::class);
    }
}
