<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre', 'activo',
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
