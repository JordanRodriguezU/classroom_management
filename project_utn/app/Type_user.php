<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_user extends Model
{
	//This is the relation of many to many with user
	public function user(){
		return $this->belongsToMany(User::class);
	}
    
}
