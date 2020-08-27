<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'nombre', 'apellidos', 'numero', 'correo', 'direccion', 'cedula', 'contra','tipo',
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
