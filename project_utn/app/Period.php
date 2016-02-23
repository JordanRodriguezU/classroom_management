<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
	//This is the function that make relation with model Pulled_aparts
	public function Pulled_aparts(){
		return $this->hasMany(Pulled_aparts::class);
	}
}
