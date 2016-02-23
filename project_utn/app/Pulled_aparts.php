<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pulled_aparts extends Model
{
    //This is the function that make relation with model User
	public function user(){
		return $this->belongsTo(User::class);
	}

	//This is the function that make relation with model User
	public function period(){
		return $this->belongsTo(Period::class);
	}


	//This is the function that make relation with model classroom one to one
	public function classroom(){
		return $this->hasOne(Classroom::class);
	}

}
