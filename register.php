<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script type="text/javascript" src="js/index.js"></script>
	<!--animate css grabbed from Dan Eden on github-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:600" rel="stylesheet">
</head>
<body>
	<?php include 'nav.php' ?>
	<main>
		<div id="home-parallax">
			<div class="parallax-layer">
				<h1>Hoo Knows</h1>
			</div>
		</div>
		<div class="form-container-center">
			<form method="POST" class="fadeInUp" id="register-well">
				<i class="material-icons">&#xE853;</i>
				<h3>Register</h3>
				<br style="clear: both;">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" name="firstName" id="firstName" autocomplete="off" placeholder="Enter first name">
				</div>
				<br style="clear: both;">
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" name="lastName" id="lastName" autocomplete="off" placeholder="Enter last name">
				</div>
				<br style="clear: both;">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" name="email" autocomplete="off" placeholder="Enter email">
				</div>
				<br style="clear: both;">
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" placeholder="Enter password">
				</div>
				<br style="clear: both;">
				<div class="form-group">
					<label for="confirmPassword">Confirm Password</label>
					<input type="password" name="confirmPassword" id="confirmPassword">
				</div>
				<br style="clear: both;">
				<div class="form-group">
					<button type="submit" class="btn-submit" value="submit"><span class="btn-submit-text">Register</span></button>
				</div>
			</form>
		</div>
	</main>
	<?php include 'footer.php';?>
</body>
</html>