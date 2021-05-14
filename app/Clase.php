<?php

namespace App;

use App\Espacio;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'imagen', 'aforo', 'empieza', 'termina', 'espacio_id'
    ];


	public function espacio(){
		return $this->belongsTo(Espacio::class);
	}

	public function users(){
		return $this->belongsToMany(User::class);
	}
}
