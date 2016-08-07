<?php 

if(strcmp($_SESSION['user_type'],"Receptionist")==0){
	header("location: ../Receptionist.php");}
elseif(strcmp($_SESSION['user_type'],"OPD Doctor")==0){
	header("location: ../opd_doctor.php");}
elseif(strcmp($_SESSION['user_type'],"TB Nurse")==0){
	header("location: ../tb_nurse.php");}
elseif(strcmp($_SESSION['user_type'],"Pharmacist")==0){
	header("location: Pharmacy.php");}
elseif(strcmp($_SESSION['user_type'],"LabAssistant")==0){
	header("location: Laboratory.php");}
elseif(strcmp($_SESSION['user_type'],"XRayRoomClerk")==0){
	header("location: XRayRoom.php");}
elseif(strcmp($_SESSION['user_type'],"SClerk")==0){
	header("location: SputumRoom.php");}
elseif(strcmp($_SESSION['user_type'],"BRoomClerk")==0){
	header("location: Bleeding.php");}
elseif(strcmp($_SESSION['user_type'],"Admin")==0){
	header("location: Admin.php");}
else{
	header("location: profile.php"); // Redirecting To Other Page
}

?>