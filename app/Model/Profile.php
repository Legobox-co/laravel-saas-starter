<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	public $fillable = ['first_name','middle_name','last_name','profile_image'];
	
	public function user(){
		return $this->belongsTo(User::class);
	}
}
