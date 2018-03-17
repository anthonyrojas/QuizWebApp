<!DOCTYPE html>
<html lang="en">
<head>
	<title>HooKnows</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<header>
	<?php
		include 'nav.php';
	?>		
	</header>

	<main>
		<div class="valign-wrapper center-align" id="select">
			<div class="row">
				<div class="col s12">
				  	<div class="card blue-grey darken-1">
				    	<div class="card-content white-text">
					      	<span class="card-title">Who Are You?</span>
					      	<div class="row">
					      		<div class="userOption col s6">
							      	<a href="Creator/index.php">
							      		<i class="large material-icons">supervisor_account</i>
						      			<p>Creator</p>
							      	</a>	
					      		</div>
					      		<div class="userOption col s6">
							      	<a href="User/index.php">
							      		<i class="large material-icons">account_circle</i>
							      		<p>General User</p>
							      	</a>					      			
					      		</div>
					      	</div>
				    	</div>
				    	<div class="card-action center-align">
				    		<a class="waves-effect waves-light btn modal-trigger" href="#userOptionModal">Which should I choose?</a>
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
		<div id="userOptionModal" class="modal bottom-sheet indigo">
			<div class="modal-content white-text">
				<h4>User Options</h4>
				<p>Thank for using this service! I hope you find this site useful in generating surveys and analyzing the data output from the results. If you have not registered an account, please</p>
				<h5>Creator</h5>
				<p>Select this option to create a quiz or survey. You will have to register an account with us first, if you do not already. Once you sign into your account you will be presented with your dashboard detailing the surveys or quizzes that you have published with some data analytics. You will also see options to create or delete quizzes and surveys.</p>
				<h5>General User</h5>
				<p>Select this option if you would simply like to fill out a survey or take a quiz. You will need to register an account to use this service. Once you are signed in, you can take any survey or quiz that you have been invited to.</p>
				<h6>Please Note</h6>
				<p><small>In the current iteration, if you already have an account for a Creator, you will have to register again for a General User. The same applies vice-versa. Sorry for this inconvenience.</small></p>
			</div>
			<div class="modal-footer indigo darken-2">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat white-text">Close</a>
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