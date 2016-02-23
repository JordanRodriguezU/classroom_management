<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //This is the relation of many to many with career
	public function career(){
		return $this->belongsToMany(Career::class);
	}
}
