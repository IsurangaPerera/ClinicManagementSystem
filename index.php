<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="robots" content="noindex">
	<title>CentralChest Clinic | Log in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes"> 
	
	<link href="css/common.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	<link href="css/login/signin.css" rel="stylesheet" type="text/css">
	<link href="css/login/login.css" rel="stylesheet" type="text/css">

</head>
<body bgcolor="#FFFFFF">	
	<script language="javascript">
		$(document).ready(function(){
		});
	</script>
	<div style="background: #FFFFFF url('images/login/background.png'); 
	background-position: center; background-size:cover; ">
	<div style="background: transparent url('images/logo.png') no-repeat center; height:111px; margin-bottom:-50px; padding-top:120px;"></div>
	<div class="account-container">
		<div class="content clearfix" >
			<form action="include/config/login.php" method="post" id="frmLogin" name="frmLogin">
				<h1>Login</h1>		
				<div class="login-fields">
					<p>Please provide your details</p>
					<br>
					<div class="field">
						<label for="username">Username</label>

						<input type="text" name="username" value="" class='login username-field' placeholder='Username' required autofocus />                </div> <!-- /field -->
						<div class="field">
							<label for="password">Password:</label>
							<input type="password" name="password" class="login password-field" placeholder="Password" required value="" />
						</div> <!-- /password -->
						<div class="field">
							<button class="button btn btn-primary btn-large" type="submit" name="submit">Log In</button>
						</div>
					</div>
					<!-- /login-fields -->
					<div class="login-actions">
						<span class="login-checkbox">
							<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
							<label class="choice" for="Field">Keep me signed in</label>
						</span>
					</div>  
					<div class="reset">
						<a href="#"><strong>Reset Password</strong></a>	
					</div>
				</form>
			</div> <!-- /content -->
		</div> <!-- /account-container -->
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="js/login/signin.js"></script>
</body>
</html>
