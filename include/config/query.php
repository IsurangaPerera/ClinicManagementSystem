<?php

class Query {
	private $nic;
	private $db;

	function __construct() {

		$this->nic = $_SESSION['nic'];		
		$root = realpath($_SERVER["DOCUMENT_ROOT"]);
		require("$root/include/config/database_connection.php");
		$this->db = $db;
	}

	function getUserDetails() {
		$nic = $this->nic;
		$db = $this->db;

		$sql = "SELECT user_data.*, ".
			   "user_name.firstname, user_name.middlename, user_name.lastname, ".
			   "user_address.address1, user_address.address2, user_address.city, ".
			   "user_contact.phone_home, user_contact.phone_mobile, user_contact.email ".
			   "FROM user_data ". 
			   "JOIN user_name ON user_data.nic = user_name.nic ".
			   "JOIN user_address ON user_name.nic = user_address.nic ".
			   "JOIN user_contact ON user_address.nic = user_contact.nic ".
			   "WHERE user_data.nic = '$nic'";

		$rs = $db->query($sql);

		if($rs === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $db->error, E_USER_ERROR);
		} else {
			$rows_returned = $rs->num_rows;
		}
		if($rows_returned > 0){
			$rs->data_seek(0);
			$row = $rs->fetch_assoc();
		}

		return $row;

	}

	function updateUser($user_name, $user_contact, $user_address, $user_data) {
		$nic = $user_name['nic'];
		$db = $this->db;
		$firstname = $user_name['firstname'];
		$lastname = $user_name['lastname'];
		$middlename = $user_name['middlename'];

		$phone_mobile = $user_contact['mobile'];
		$phone_home = $user_contact['phone'];
		$email = $user_contact['email'];

		$address1 = $user_address['address1'];
		$address2 = $user_address['address2'];
		$city = $user_address['city'];

		$title = $user_data['title'];
		$birthdate = $user_data['birthdate'];
		$gender = $user_data['gender'];
		$civilstatus = $user_data['civilstatus'];
		$department = $user_data['department'];
		$designation = $user_data['designation'];


		$sql_name = "UPDATE user_name ".
					"SET firstname = '$firstname', ".
					"lastname = '$lastname', ".
					"middlename = '$middlename' ".
					"WHERE nic = '$nic'";

		$sql_contact = "UPDATE user_contact ".
					   "SET phone_mobile = '$phone_mobile', ".
					   "phone_home = '$phone_home', ".
					   "email = '$email' ".
					   "WHERE nic = '$nic'";

		$sql_address = "UPDATE user_address ".
					   "SET address1 = '$address1', ".
					   "address2 = '$address2', ".
					   "city = '$city' ".
					   "WHERE nic = '$nic'";

		$sql_data = "UPDATE user_data ".
					"SET title = '$title', ".
					"birthdate = '$birthdate', ".
					"gender = '$gender', ".
					"civilstatus = '$civilstatus', ".
					"department = '$department', ".
					"designation = '$designation' ".
					"WHERE nic = '$nic'";

		$rs = $db->query($sql_name);
		if($rs === false) {
			trigger_error('Wrong SQL: ' . $sql_name . ' Error: ' . $db->error, E_USER_ERROR);
		} 

		$rs = $db->query($sql_contact);
		if($rs === false) {
			trigger_error('Wrong SQL: ' . $sql_contact . ' Error: ' . $db->error, E_USER_ERROR);
		} 

		$rs = $db->query($sql_address);
		if($rs === false) {
			trigger_error('Wrong SQL: ' . $sql_address . ' Error: ' . $db->error, E_USER_ERROR);
		} 

		$rs = $db->query($sql_data);
		if($rs === false) {
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
		} 

	}

	function changePassword($old, $new) {
		$nic = $this->nic;
		$db = $this->db;

		$sql = "UPDATE user_login ".
			   "SET password = '$new' ".
			   "WHERE password = '$old' AND nic = '$nic'";

		if($db->query($sql) === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $db->error, E_USER_ERROR);
		} else {

			$affected_rows = $db->affected_rows;
		}

		return $affected_rows;
    }
}

?>