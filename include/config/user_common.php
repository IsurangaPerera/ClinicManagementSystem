<?php
class User{

	function __construct(){
		
	}

	function verifyUser($thisUser,$userType){
		if(strcmp($thisUser,$userType)!=0){
			header("location: ../../index.php");
		}
	}
}