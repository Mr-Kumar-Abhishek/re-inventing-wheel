<?php

	// defining our directory path
	define(BASE_PATH, dirname(realpath(__FILE__)));

	require(BASE_PATH . '/library/Initialize.php');
	require(BASE_PATH . '/library/Controller.php');
	require(BASE_PATH . '/library/Views.php');
	
	$initialize = new Initialize();
?>