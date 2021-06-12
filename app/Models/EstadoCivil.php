<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    public function usuario()
    {
        return $this->hasMany(User::class, 'id_estado_civil');
    }
}
