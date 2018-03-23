<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
	<script type="text/javascript" src="js/login.js"></script>
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
			<form method="POST" id="register-well" name="login-form">
				<div class="form-group">
					<i class="material-icons">&#xE853;</i>
					<h3>Login</h3>
					<br style="clear: both;">
					<p id="loginjs-error"></p>
					<br style="clear: both;">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" autocomplete="off" placeholder="Enter email">
					</div>
					<br style="clear: both;">
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" autocomplete="off" placeholder="Enter password">
					</div>
					<br style="clear: both;">
					<div class="form-group">
						<button type="submit" class="btn-submit" value="submit"><span class="btn-submit-text">Login</span></button>
					</div>
					<br style="clear: both;">
					<hr>
					<br style="clear: both;">
					<div class="form-group">
						<a href="register.php" class="redirect-button">Don't Have An Account? Sign Up!</a>
					</div>
					<br style="clear: both;">
					<br style="clear: both;">
					<br style="clear: both;">
				</div>
			</form>
		</div>
	</main>
	<?php include 'footer.php';?>
</body>
</html>