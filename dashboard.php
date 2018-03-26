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
			<div class="dashboard-section-header">
				<h3>My Account</h3>
			</div>
			<div class="dashboard-section-body">
				<?php
				$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
				$query = "SELECT * FROM Users WHERE Email='" . $_SESSION['user'] . "'";
				$result = mysqli_query($connection, $query);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						showAccountDetails($row);
					}
				}
				?>
				<?php
				function showAccountDetails($userRow){
					echo '<img src="media/profile_blank.png" class="profile-picture" alt="profile picture">';
					echo "<p>" . $userRow['FirstName'] . "</p>";
					echo "<p>" . $userRow['LastName'] . "</p>";
					echo "<p>" . $userRow['Email'] . "</p>";
				}
				?>
			</div>
			<hr>
			<div class="dashboard-section-header">
				<h3>Quizzes</h3>
			</div>
			<div class="dashboard-section-body">
				<?php
				function showQuizzes($quizRow){
				}
				?>
			</div>
			<hr>
			<div class="dashboard-section-header">
				<h3>My Quizzes</h3>
			</div>
			<div class="dashboard-section-body">
				<?php
				function showQuizzesAuthored(){
				}
				?>
			</div>
		</div>
	</main>
	<?php include 'footer.php';?>
</body>
</html>