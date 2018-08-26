<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = ['nombre','descripcion','condicion'];

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}
