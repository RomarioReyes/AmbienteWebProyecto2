<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'imagen', 'cantidad', 'precio', 'activo', 'id_categoria'
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
