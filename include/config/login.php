<?php
session_start();
require('database_connection.php');
require('../security/security1.php');

$user_name = test_input($_POST['username']);
$password = test_input($_POST['password']);

$sql = "SELECT user_login.type, user_login.nic, user_name.firstname, user_name.lastname ".
	   "FROM user_name ".
	   "JOIN user_login ".
	   "ON user_name.nic = user_login.nic ".
	   "WHERE user_login.username='$user_name' AND user_login.password='$password'";

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
	$_SESSION['user_name'] = $row['firstname']." ".$row['lastname'];
	$_SESSION['nic'] =  $row['nic'];

	$url = "../../login/id/$row[type]/$row[nic]";
	header("location: $url");
} else {
	header("location: ../../index.php");
}


?>




