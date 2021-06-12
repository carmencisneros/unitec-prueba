<?php

use Illuminate\Database\Seeder;
use App\Models\Nivel;
class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nivel::create(['descripcion' => 'Preparatoria']);
        Nivel::create(['descripcion' => 'Licenciatura']);
        Nivel::create(['descripcion' => 'Posgrado']);
    }
}
