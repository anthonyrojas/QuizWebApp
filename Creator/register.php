<!DOCTYPE html>
<html lang="en">
<head>
	<title>HooKnows Creator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  	<!--custom style sheet from the root directory-->
  	<link rel="stylesheet" type="text/css" href="../main.css">
</head>
<body>
	<header>
	</header>
	<main>
		<!--this is where I will put a login form and a register link-->
		<div class="container black" style="height: 100vh !important">
			<div class="row">
				<form class="col s12 center-align">
					<div class="row">
						<div class="input-field col s12">
							<input type="text" name="firstName" id="firstName"  required>
						</div>
					</div>
				</form>
			</div>
		</div>
	</main>
	<?php
		include 'footer.php'
	?>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$('.modal').modal();
		});
	</script>
</body>
</html>