<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = [
        'id','contacto','telefono_contacto'
    ];

    public $timestamps = false;

    public function persona(){ //Un proveedor pertenece a una persona
        return $this->belongsTo('App\Persona');
    }
}