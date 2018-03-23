<?php
	require_once 'config.php';
	session_start();
	if(isset($_SESSION['user'])){
		header('Location: dashboard.php');
	}
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
	<script type="text/javascript" src="js/register.js"></script>
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
			<form method="POST" class="fadeInUp" id="register-well" name="register-form" onsubmit="return validateForm();" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<i class="material-icons">&#xE853;</i>
				<h3>Register</h3>
				<br style="clear: both;">
				<?php if(isset($_POST['register'])): ?>
					<p id="formjs-success">Thanks for signing up! <br> Please login with your credentials.</p>
					<?php
						$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
						if(mysqli_connect_errno()){
							echo "Failed to connect to database";
						}
						else{
							$firstName = mysqli_real_escape_string($connection, $_POST['firstName']);
							$lastName = mysqli_real_escape_string($connection, $_POST['lastName']);
							$email = mysqli_real_escape_string($connection, $_POST['email']);
							$password = mysqli_real_escape_string($connection, $_POST['password']);
							$password = password_hash($password, PASSWORD_BCRYPT);
							$userInsertQuery = "INSERT INTO Users (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')";
							mysqli_query($connection, $userInsertQuery);
							mysqli_close($connection);
						}
					?>
					<?php unset($_POST['register']); ?>
				<?php endif; ?>
				<p id="formjs-error"></p>
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
					<small id="confirmPasswordText">Passwords do not match.</small>
				</div>
				<br style="clear: both;">
				<div class="form-group">
					<button type="submit" class="btn-submit" value="register user" name="register"><span class="btn-submit-text">Register</span></button>
				</div>
			</form>
		</div>
	</main>
	<?php include 'footer.php';?>
</body>
</html>