<?php

use Illuminate\Database\Seeder;
use App\Models\Genero;
class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create(['descripcion' => 'Femenino']);
        Genero::create(['descripcion' => 'Masculino']);
    }
}
