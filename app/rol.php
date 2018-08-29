<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'roles';
    protected $fillable = ['nombre','descripcion','condicion'];
    public $timestamps = false;
}
