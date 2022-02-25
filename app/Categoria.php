<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    protected $fillable = ['name'];

    public function cursos()
    {
        return $this->hasMany('App\Curso');
    }
}
