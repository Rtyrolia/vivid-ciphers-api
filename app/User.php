<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $fillable = array('email','password','active');

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function roles(){
        return $this->belongsToMany('App\Role')->withTimeStamps();
    }
}
