<?php

	//require_once('vendor/autoload.php');
	//use Screen\Capture;
	set_time_limit(0);
	$http_code = $_GET['http_code'];
	$host = $_GET['host'];
	
	$ch = curl_init($host);  
	curl_setopt($ch, CURLOPT_TIMEOUT, 15);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);	
	$data = curl_exec($ch);  
	$response = curl_getinfo($ch);

	echo json_encode($response);
	
?>