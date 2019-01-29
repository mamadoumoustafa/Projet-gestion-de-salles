<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salles extends Model
{
    //

	public function reservations(){

		return $this->hasMany('App\Reservations');

	}


}
