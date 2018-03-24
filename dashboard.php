<?php
require_once 'config.php';
session_start();
if(!isset($_SESSION['user'])){
	header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script type="text/javascript" src="js/index.js"></script>
	<!--animate css grabbed from Dan Eden on github-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:600" rel="stylesheet">
	<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
	<?php include 'nav.php' ?>
	<main>
		<div id="home-parallax">
			<div class="parallax-layer">
				<h1>Hoo Knows</h1>
			</div>
		</div>
		<div class="dashboard-main">
			<div class="dashboard-header"><h1>My Dashboard</h1></div>
			<hr>
			<div class="dashboard-section">
				<div class="dashboard-header">
					<h3>My Account</h3>
				</div>
				<div class="dashboard-section-body">
					<?php
					$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
					$query = "SELECT * FROM Users WHERE email='" . $_SESSION['user'] . "'";
					$result = mysqli_query($connection, $query);
					?>
				</div>
			</div>
			<hr>
			<div class="dashboard-section">
				<div class="dashboard-header">
					<h3>Quizzes</h3>
				</div>
			</div>
			<hr>
			<div class="dashboard-section">
				<div class="dashboard-header">
					<h3>My Quizzes</h3>
				</div>
			</div>
		</div>
	</main>
	<?php include 'footer.php';?>
</body>
</html>