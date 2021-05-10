<?php

namespace App;

use App\Espacio;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    //


	public function espacio(){
		return $this->belongsTo(Espacio::class);
	}

	public function users(){
		return $this->belongsToMany(User::class);
	}
}
