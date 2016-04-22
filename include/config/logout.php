<?php
session_start();
$home_url = "../../index.php";

unset($_SESSION['user_name']);
unset($_SESSION['user_type']);
unset($_SESSION['login_user']);

if(session_destroy()){
	header("location: $home_url");
	exit;
}

?>