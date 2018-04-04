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
	<title>Make A Quiz</title>
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
		<div class="quiz-make-body-section">
			<div class="questions-made">
			</div>
			<form>
				<label for="new-question-description">Question description: </label>
				<textarea id="new-question-description" name="new-question-description" cols="100" rows="10"></textarea>
				<label for="new-question-answer"></label>
			</form>
		</div>
	</main>
	<?php include 'footer.php';?>
</body>
</html>