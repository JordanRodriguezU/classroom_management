<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour_hand extends Model
{
    //This is the relation of many to many with place
	public function place(){
		return $this->belongsToMany(Place::class);
	}
}
