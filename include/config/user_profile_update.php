<?php

$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require("$root/include/config/query.php");
$make_query = new Query();

$user_name['nic'] = $_POST['uid'];

$user_name['firstname'] = $_POST['firstname'];
$user_name['middlename'] = $_POST['middlename'];
$user_name['lastname'] = $_POST['lastname'];

$user_contact['mobile'] = $_POST['mobile'];
$user_contact['phone'] = $_POST['phone'];
$user_contact['email'] = $_POST['email'];

$user_address['address1'] =$_POST['address1'];
$user_address['address2'] =$_POST['address2'];
$user_address['city'] =$_POST['city'];

$user_data['title'] = $_POST['title'];
$user_data['birthdate'] = $_POST['birthdate'];
$user_data['gender'] = $_POST['gender'];
$user_data['civilstatus'] = $_POST['civilstatus'];
$user_data['department'] = $_POST['department'];
$user_data['designation'] = $_POST['designation'];

$make_query->updateUser($user_name, $user_contact, $user_address, $user_data);

echo "none";
?>