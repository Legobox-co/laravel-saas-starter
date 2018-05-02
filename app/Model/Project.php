<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	public $fillable = ['name','repository','type','repository_type','branch','user_id'];
	
	public function user(){
		return $this->belongsTo(User::class);
	}

	public function repositoryType(){
		return $this->belongsTo(RepositoryType::class);
	}

	public function servers(){
		return $this->hasMany(Server::class);
	}

	public function hooks(){
		return $this->hasMany(Hook::class);
	}
}
