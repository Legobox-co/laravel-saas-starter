<?php
namespace App\Http\Controllers\Traits;

use App\Http\Controllers\Traits\Responders;
use Validator;
// use an event to broadcast the creation of new stuffs
// use an event to broadcast updates on new stuffs

trait RequestHelpers {
	use Responders;
	
	public function validator($data, $rules = null) {
		if($rules){
			return Validator::make($data, $rules);
		}
		return Validator::make($data, $rules);
	}

	public function newModel($data){
		// creating new model
		$model = $this->model();
		event(new RegisteredModel($registered = $this->create($data)));
		return $registered;
	}
}