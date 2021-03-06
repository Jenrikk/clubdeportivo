<?php

namespace App;

use App\Clase;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'imagen', 'empieza', 'termina',
    ];

    public function clases(){
		return $this->hasMany(Clase::class);
	}

	public function users(){
		return $this->belongsToMany(User::class);
	}
}
