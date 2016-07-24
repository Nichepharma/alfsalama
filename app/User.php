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
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function role(){
      return $this->belongsTo('App\Role');
    }

    public function country(){
      return $this->belongsTo('App\Country');
    }

    public function city(){
      return $this->belongsTo('App\City');
    }
}
