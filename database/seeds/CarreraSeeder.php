<?php

use Illuminate\Database\Seeder;
use App\Models\Carrera;
class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create(['id' => 1, 'id_nivel' => 2, 'descripcion' => 'Lic. En Derecho']);
        Carrera::create(['id' => 2, 'id_nivel' => 2, 'descripcion' => 'Lic. En Finanzas']);
        Carrera::create(['id' => 3, 'id_nivel' => 3, 'descripcion' => 'Mtria. Admon. De Negocios']);
        Carrera::create(['id' => 4, 'id_nivel' => 3, 'descripcion' => 'Mtria. Direccion de proyectos']);
    }
}
