<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $fillable = ['titulo', 'descripcion'];
    protected $guarded = []; //Podemos hacer esto si no hacemos: Model::create(request()->all());
}
