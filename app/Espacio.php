<?php

namespace App;

use App\Clase;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    //

    public function clases(){
		return $this->hasMany(Clase::class);
	}

	public function users(){
		return $this->belongsToMany(User::class);
	}
}
