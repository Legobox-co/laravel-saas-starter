<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
	public $guarded = [];
	
	public function project(){
		return $this->belongsTo(Project::class);
	}
}
