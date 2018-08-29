<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    protected $table = 'roles';
    protected $fillable = ['nombre','descripcion','condicion'];
    public $timestamps = false;

    //Un rol puede tener varios usuarios
    public function user(){
        return $this->hasMany('App\User');
    }
}
