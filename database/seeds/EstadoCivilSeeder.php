<?php

use Illuminate\Database\Seeder;
use App\Models\EstadoCivil;
class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstadoCivil::create(['descripcion' => 'Soltero']);
        EstadoCivil::create(['descripcion' => 'Casado']);
        EstadoCivil::create(['descripcion' => 'Otro']);
    }
}
