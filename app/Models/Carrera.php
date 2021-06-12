<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'id_nivel');
    }
    public function usuario()
    {
        return $this->hasMany(User::class, 'id_carrera');
    }
}
