<?php

if(!function_exists('return_class')){
	function return_class($object){
		return new ReflectionClass($object);
	}
}
