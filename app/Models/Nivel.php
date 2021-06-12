<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;
class Nivel extends Model
{
    public function carrera()
    {
        return $this->hasMany(Carrera::class, 'id_nivel');
    }
    public function usuario()
    {
        return $this->hasMany(User::class, 'id_nivel');
    }
}
