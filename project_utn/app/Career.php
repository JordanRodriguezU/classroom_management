<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //This is the relation of many to many with user
	public function user(){
		return $this->belongsToMany(User::class);
	}

//This is the relation of many to many with course
	public function course(){
		return $this->belongsToMany(Course::class);
	}
}
