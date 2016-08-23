<?php

function db_connect(){
	$server_name = "localhost";
	$user_name = "root";
	$password = "Tally456";
	$db_name = "chestclinic";
	$db = new mysqli($server_name, $user_name, $password, $db_name);
	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	return $db;
}

?>