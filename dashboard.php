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
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script type="text/javascript" src="js/index.js"></script>
	<!--animate css grabbed from Dan Eden on github-->
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
				$quizQuery = "SELECT * FROM UserQuizzes WHERE UserEmail='" . $_SESSION['user'] . "'";
				$quizResults = mysqli_query($connection, $quizQuery);
				if($quizResults->num_rows > 0){
					while($row=$quizResults->fetch_assoc()){
						showQuizzes($row);
					}
				}else{
					noQuizzes();
				}
				function showQuizzes($quizRow){
					echo "<p>" . quizRow['QuizID'] . "</p>";
				}
				function noQuizzes(){
					echo "<p>No quizzes found that you have been invited to.</p>";
				}
				?>
			</div>
			<hr>
			<div class="dashboard-section-header">
				<h3>My Quizzes</h3>
			</div>
			<div class="dashboard-section-body">
				<form action="makequiz.php">
					<button onclick="submit" id="create-quiz-btn">Create Quiz</button>
				</form>
				<?php
				$quizzesMadeQuery = "SELECT * FROM Quiz WHERE Email='" . $_SESSION['user'] . "'";
				$quizzesMadeResults = mysqli_query($connection, $quizzesMadeQuery);
				if($quizResults->num_rows > 0){
					while($row=$quizzesMadeResults->fetch_assoc()){
						showQuizzesAuthored($row);
					}
				}else{
					noQuizzesAuthored();
				}
				function showQuizzesAuthored($myQuizRow){
				}
				function noQuizzesAuthored(){
					echo "<p>You have not made any quizzes.</p>";
				}
				?>
			</div>
		</div>
		<?php mysqli_close($connection) ?>
	</main>
	<?php include 'footer.php';?>
</body>
</html>