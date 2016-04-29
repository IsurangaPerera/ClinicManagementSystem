<?php

class Query {
	private $pId;
	private $db;

	function __construct() {
		$root = realpath($_SERVER["DOCUMENT_ROOT"]);
		require("$root/include/config/database_connection.php");
		$this->db = $db;
	}

	function addPatient($object) {
		
		$db = $this->db;
		$title_array = array("10"=>"Dr.", "37"=>"Dra.", "9"=>"Mrs.", "7"=>"Mr.", "8"=>"Ms.");
		$gender_array = array("1"=>"Male", "2"=>"Female");
		$civil_status_array = array("6"=>"Divorced", "5"=>"Legal Seperated", "4"=>"Married", "3"=>"Single");
		$blood_group_array = array("31"=>"A+", "32"=>"A-", "35"=>"AB+", "36"=>"AB-", "33"=>"B+", "34"=>"B-", "29"=>"O+", "30"=>"O-");


		/*Adding general data to
				patient_data table*/
		$sql_data = 'INSERT INTO patient_data (patientId, nic, dob, title, birth_place, gender, civilstatus, religion, blood_group) '.
					'VALUES (?,?,?,?,?,?,?,?,?)';
		$stmt = $db->prepare($sql_data);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
		}
		$patientId = $object['patientID'];	
		$nic =$object['nic'];
		$dob = $object['birthday'];		
		$title = $title_array[$object['title']];
		$birth_place = $object['birthplace'];
		$gender = $gender_array[$object['gender']];
		$civilstatus = $civil_status_array[$object['civil_status']];
		$religion = $object['religion'];
		$blood_group = $blood_group_array[$object['bloodGroup']];
		if(!$stmt->bind_param('sssssssss',$patientId,$nic,$dob,$title,$birth_place,$gender,$civilstatus,$religion,$blood_group)) {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}
		if (!$stmt->execute()) {
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}


		/*Adding name related data to
				patient_name table*/
		$sql_name = 'INSERT INTO patient_name (patientId, firstname, middlename, lastname) '.
					'VALUES (?,?,?,?)';
		$stmt = $db->prepare($sql_name);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_name . ' Error: ' . $db->error, E_USER_ERROR);
		}
		$firstname = $object['firstname'];
		$middlename = $object['middlename'];
		$lastname = $object['lastname'];
		if(!$stmt->bind_param('ssss',$patientId,$firstname,$middlename,$lastname)) {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}
		if (!$stmt->execute()) {
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}


		/*Adding address related data to
				patient_address table*/
		$sql_address = 'INSERT INTO patient_address (patientId, address1, address2, city) '.
					   'VALUES (?,?,?,?)';
		$stmt = $db->prepare($sql_address);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_address . ' Error: ' . $db->error, E_USER_ERROR);
		}
		$address1 = $object['address1'];
		$address2 = $object['address2'];
		$city = $object['city'];
		if(!$stmt->bind_param('ssss',$patientId,$address1,$address2,$city)) {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}
		if (!$stmt->execute()) {
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}


		/*Adding contact related data to
				patient_contact table*/
		$sql_contact = 'INSERT INTO patient_contact (patientId, phone_office, phone_home, phone_mobile, email) '.
					   'VALUES (?,?,?,?,?)';
		$stmt = $db->prepare($sql_contact);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_contact . ' Error: ' . $db->error, E_USER_ERROR);
		}
		$phone_office = $object['phone_office'];
		$phone_home = $object['phone_home'];
		$phone_mobile = $object['phone_mobile'];
		$email = $object['email'];
		if(!$stmt->bind_param('sssss',$patientId,$phone_office,$phone_home,$phone_mobile,$email)) {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}
		if (!$stmt->execute()) {
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}
		$stmt->close();
	}
}

?>