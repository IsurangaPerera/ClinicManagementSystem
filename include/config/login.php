<?php
session_start();
require('database_connection.php');
require('../security/security1.php');

$user_name = test_input($_POST['username']);
$password = test_input($_POST['password']);

$sql = "select type from user where Password='$password' AND Username='$user_name'";
$rs=$db->query($sql);

if($rs === false) {
	trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $db->error, E_USER_ERROR);
} else {
	$rows_returned = $rs->num_rows;
}

if($rows_returned > 0){
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$_SESSION['login_user'] = $user_name;
	$_SESSION['user_type'] = $row['type'];
	require('usertype.php');
} else {
	header("location: ../../index.php");
}


?>




