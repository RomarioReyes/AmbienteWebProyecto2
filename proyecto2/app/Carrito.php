<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{

    // id serial primary key,
    // id_usuario integer not null,
    // id_producto integer not null,
    // fecha text not null,	
    // activo boolean default true,
    // CONSTRAINT fk_usuario FOREIGN KEY (id_usuario)
    //         REFERENCES usuarios(id),
    // CONSTRAINT fk_producto FOREIGN KEY (id_producto)
    //         REFERENCES productos(id)
    protected $fillable = [
        'fecha', 'activo', 'id_usuario', 'id_producto',
    ];
    public $timestamps = false;
    const UPDATED_AT = null;
}
