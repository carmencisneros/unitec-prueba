<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido_paterno',
        'apellido_materno','edad','id_estado_civil','id_genero','id_nivel','id_carrera','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'id_carrera');
    }
    public function nivel()
    {
        return $this->belongsTo(Carrera::class, 'id_nivel');
    }
    public function genero()
    {
        return $this->belongsTo(Carrera::class, 'id_genero');
    }
    public function edoCivil()
    {
        return $this->belongsTo(Carrera::class, 'id_estado_civil');
    }
}
