<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RepositoryType extends Model
{
	public $guarded = [];
	
	public function projects(){
		return $this->hasMany(Project::class);
	}
}
