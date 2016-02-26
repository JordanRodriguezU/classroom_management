<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];
//This is the function that make relation with model pulled_aparts
    public function pulled_aparts(){
        return $this->hasMany(Pulled_aparts::class);
    }

    //This is the relation of many to many with typeuser
    public function typeUser(){
        return $this->belongsToMany(Type_user::class);
    }
    //This is the relation of many to many with career
    public function career(){
        return $this->belongsToMany(Career::class);
    }

}
