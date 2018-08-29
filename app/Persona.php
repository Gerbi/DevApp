<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombre','tipo_documento','num_documento','direccion','telefono','email'];

    public function proveedor(){  //Una persona esta relacionada solo con un proveedor
        return $this->hasOne('App\Proveedor');
    }

    public function user(){
        //una persona esta relacionada directamente con un usuario
        return $this->hasOne('App\User');
    }
}
