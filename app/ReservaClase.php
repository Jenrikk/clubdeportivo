<?php

namespace App;

use App\Clase;
use App\User;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ReservaClase extends Pivot
{
    protected $table = 'clase_user';
    protected $fillable = [
        'user_id', 'clase_id',
    ];

    public function user(){
		return $this->belongsTo(User::class);
	}

	public function clase(){
		return $this->belongsTo(Clase::class);
	}
}
