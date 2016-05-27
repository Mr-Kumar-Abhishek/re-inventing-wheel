<?php

	// defining our directory path
	define(BASE_PATH, dirname(realpath(__FILE__)));

	function __autoload($class){
		require_once(BASE_PATH . '/library/' . $class . '.php');
	}
	
	$initialize = new Initialize();
?>