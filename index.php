<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hoo Knows</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<script type="text/javascript" src="js/index.js"></script>
	<!--animate css grabbed from Dan Eden on github-->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<?php include 'nav.php' ?>
	<main>
		<div id="home-parallax">
			<div class="parallax-layer">
				<h1 class="fadeInUp">Hoo Knows</h1>
			</div>
		</div>
		<div class="container-fluid" id="home-about">
		</div>
	</main>
	<?php include 'footer.php';?>
</body>
</html>