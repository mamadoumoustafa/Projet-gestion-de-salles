<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    //
    protected $fillable = ['id','salle_id','date_reservation','debut_reservation','fin_reservation'];
}
