<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
     //This is the function that make relation with model place
	public function place(){
		return $this->belongsTo(Place::class);
	}

	//This is the function that make relation with model Pulled_aparts one to one
	public function Pulled_aparts(){
		return $this->belongsTo(Pulled_aparts::class);
	}
}
