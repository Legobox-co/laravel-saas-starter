<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Traits\RequestHelpers;

class SuperController extends Controller
{
	use RequestHelpers;
	//
	
	public function model(){
		return $this->model;
	}

	public function welcome()
    {
        return view('welcome');
	}
}
