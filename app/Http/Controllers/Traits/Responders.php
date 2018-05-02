<?php

namespace App\Http\Controllers\Traits;

trait Responders {
	public function done($response, $message = null, $code = null){
		$array = ['status'=>'success','code'=>'200'];
		$array[] = [
			'data' => $response
		];
		$code != null ? $array[] = ['code' => $code ] : $array;
		
		// $resp = array_merge($array,);
		return response()->json($array);
	}

	public function error($response = null, $code = 500){
		$array = ['status'=>'error','code'=>$code];
		$array[] = [
			'data' => $response
		];
		return response()->json($array);
	}
}