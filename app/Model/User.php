<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
// use Laravel\Cashier\Billable;

class User extends Authenticatable implements JWTSubject
{
	use Notifiable ;  
	// use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','username','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
	];
	
	public function profile(){
		return $this->hasOne('App\Model\Profile');
	}

	public function projects(){
		return $this->hasMany(Project::class);
	}

	public function getJWTIdentifier(){
		return $this->getKey();
	}

	public function getJWTCustomClaims(){
		return [];
	}
}
