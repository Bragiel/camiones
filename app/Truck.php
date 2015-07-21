<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    public function incomings(){
        return $this->hasMany('App\Incoming');
    }
}
