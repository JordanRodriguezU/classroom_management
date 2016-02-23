<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //This is the function that make relation with model classroom
    public function classroom(){
        return $this->hasMany(Classroom::class);
    }

    //This is the relation of many to many with hour_hand
	public function hour_hand(){
		return $this->belongsToMany(Hour_hand::class);
	}
}
