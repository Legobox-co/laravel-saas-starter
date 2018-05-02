<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
	public $fillable = ['name'];
	
	public function projects(){
		return $this->hasMany(Project::class);
	}
}
