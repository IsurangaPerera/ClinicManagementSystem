<?php
if(!isset($_COOKIE['USERID']) || !isset($_COOKIE['USERTYPE'])){
	//setcookie("USERID", "", time()-3600);
	//setcookie("USERTYPE", "", time()-3600);
	header('Location: ../../index.php');
}

else {
	$URL_SET = array(
		"include/Receptionist.php" => "Receptionist",
		"include/opd_doctor.php" => "OPD Doctor",
		"include/tb_nurse.php" => "TB Nurse",
		"include/pharmacist.php" => "Pharmacist",
		"include/laboratory_assistant.php" => "Laboratory Assistant",
		"include/radiologist.php" => "Radiologist",
		"include/sputum_room_clerk.php" => "Sputum Room Clerk",
		"include/bleeding_nurse.php" => "Bleeding Room Nurse",
		"include/administrator.php" => "Administrator",
		"include/patient_management.php" => "OPD Doctor"
	);

	$uri = substr($_SERVER['REQUEST_URI'], 1);
	$type = $_COOKIE['USERTYPE'];
	if($_COOKIE['USERTYPE'] == $URL_SET[$uri]){

	} else{
		//setcookie("USERID", "", time()-3600);
		//setcookie("USERTYPE", "", time()-3600);
		header('Location: ../../index.php');
	}
}

?>