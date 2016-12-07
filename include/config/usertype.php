<?php 

if(strcmp($_SESSION['user_type'],"Receptionist")==0){
	header("location: ../Receptionist.php");}
elseif(strcmp($_SESSION['user_type'],"OPD Doctor")==0){
	header("location: ../opd_doctor.php");}
elseif(strcmp($_SESSION['user_type'],"TB Nurse")==0){
	header("location: ../tb_nurse.php");}
elseif(strcmp($_SESSION['user_type'],"Pharmacist")==0){
	header("location: ../pharmacist.php");}
elseif(strcmp($_SESSION['user_type'],"Laboratory Assistant")==0){
	header("location: ../laboratory_assistant.php");}
elseif(strcmp($_SESSION['user_type'],"Radiologist")==0){
	header("location: ../radiologist.php");}
elseif(strcmp($_SESSION['user_type'],"Sputum Room Clerk")==0){
	header("location: ../sputum_room_clerk.php");}
elseif(strcmp($_SESSION['user_type'],"Bleeding Room Nurse")==0){
	header("location: ../bleeding_nurse.php");}
elseif(strcmp($_SESSION['user_type'],"Administrator")==0){
	header("location: ../administrator.php");}
else{
	header("location: profile.php"); // Redirecting To Other Page
}

?>
