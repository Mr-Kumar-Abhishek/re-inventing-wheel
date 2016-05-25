<?php
	$url = $_GET['url'];
	require 'controller/' . $url . '.php';
	$init = new Index();
?>