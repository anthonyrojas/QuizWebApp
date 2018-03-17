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
	<?php
		include 'nav.php';
	?>
	<main>
		<div class="container red" style="height: 100vh !important">
			<div class="row purple white-text" style="margin: 0 !important;">
				<div class="col m5 center-align">
					<h4>What Is This?</h4>
				</div>
				<div class="col m7">
					<p>
						This website provides functionality for people to create quizzes and surveys as Creators. You can invite General Users to take your quiz or survey and can then see results with data analysis. For quizzes, you can provide the correct answers and my program will automatically assign a grade to the user who took that quiz, while you can see what their answers were.
					</p>
					<p>
						Meanwhile, as General Users, you can take quizzes and surveys which you have been invited to take. Be aware that you do not have to take any quizzes and surveys you are invited to. However, be aware at this moment that there is no way of blocking a Creator's invites. You will also be able to see all your quiz scores.
					</p>
				</div>
			</div>
			<div class="row indigo white-text" style="margin: 0 !important; min-height: 200px;">
				<div class="col m5 center-align">
					<h4>Why Was It Made?</h4>
				</div>
				<div class="col m7">
					<p>
						This website was made to aid anyone who would like to gather data or quiz their friends, siblings, students, etc. It is completely free to use and easy to learn how to operate.
					</p>
				</div>
			</div>
			<div class="row cyan white-text" style="margin: 0 !important; min-height: 200px;">
				<div class="col m5 center-align">
					<h4>Room for Improvement</h4>
				</div>
				<div class="col m7">
					<p>
						With any product there is always room for improvement. I look to implement extra features, such as: timed quizzes, quizzes with deadlines, and a real-time forum to get in touch between General Users and Creators. 
					</p>
					<p>
						You may also contact me below with ideas or issues you find in this website.
					</p>
				</div>
			</div>
			<div class="row grey darken-4 white-text" style="margin: 0 !important;" id="emailForm">
				<form class="col s12" method="post" action="about.php#emailForm">
					<div class="row">
						<div class="col s12 center-align">
							<h5>Contact Me</h5>
						</div>
					</div>
					<?php
						include 'email_action.php';
					?>
					<div class="row">
						<div class="col s2"></div>
						<div class="input-field col s8">
							<input id="name" type="text" name="name" class="validate" autocomplete="off" required>
							<label for="name" class="white-text">Name</label>
						</div>
						<div class="col s2"></div>
					</div>					
					<div class="row">
						<div class="col s2"></div>
						<div class="input-field col s8">
							<input id="email" type="email" name="email" class="validate" autocomplete="off" required>
							<label for="email" class="white-text">Email</label>
						</div>
						<div class="col s2"></div>
					</div>
					<div class="row">
						<div class="col s2"></div>
						<div class="input-field col s8">
							<input type="text" name="subject" id="subject" class="validate" autocomplete="off" required>
							<label for="subject" class="white-text">Subject</label>
						</div>
						<div class="col s2"></div>
					</div>
					<div class="row">
						<div class="col s2"></div>
						<div class="input-field col s8">
							<textarea id="emailMessage" name="emailMessage" class="materialize-textarea white-text" autocomplete="off"></textarea>
							<label for="emailMessage">Message</label>
						</div>
						<div class="col s2"></div>
					</div>
					<div class="row">
						<div class="col s12 center-align">
							<button class="btn waves-effect waves-light" type="submit" name="submit">Submit
							  	<i class="material-icons right">send</i>
							</button>
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
		});
	</script>
</body>
</html>