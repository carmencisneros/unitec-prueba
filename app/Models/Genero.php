<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public function usuario()
    {
        return $this->hasMany(User::class, 'id_genero');
    }
}
