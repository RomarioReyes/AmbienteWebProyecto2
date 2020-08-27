<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    
    protected $fillable = [
        'fecha', 'orden', 'id_usuario', 'id_producto',
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
