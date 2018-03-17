<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$allSet = false;
		$errMessage = '<div class="row"><div class="col s12 m8 offset-m2 center-align"><div class="card-panel red darken-1">ERROR! Following fields are missing:';
		if(isset($_POST['email']) && !empty($_POST['email'])){
			$allSet = true;
		}else{
			$errMessage = $errMessage . '<br>Email';
			$allSet = false;
		}
		if(isset($_POST['name']) && !empty($_POST['name'])){
			$allSet = true;
		}else{
			$errMessage = $errMessage . '<br>Name';
			$allSet = false;
		}
		if(isset($_POST['subject']) && !empty($_POST['subject'])){
			$allSet = true;
		}else{
			$errMessage = $errMessage . '<br>Subject';
			$allSet = false;
		}
		if(isset($_POST['emailMessage']) && !empty($_POST['emailMessage'])){
			$allSet = true;
		}else{
			$errMessage = $errMessage . '<br>Email Message';
			$allSet = false;
		}
		if($allSet){
			$to = 'arojas.web@yahoo.com';
			$from = $_POST['email'];
			$text = $_POST['name'] . " wrote: \n" .$_POST['emailMessage'] . "\n\n From the quiz app.";
			$subject = $_POST['subject'];
			$headers .= 'From: ' . $from;
			mail($to, $subject, $text, $headers);
			echo '<div class="row"><div class="col s12 m8 offset-m2 center-align"><div class="card-panel green">' .
			'<span class="white-text">Email sent! Thank you for your feedback or concern/question.</span>' .
			'</div></div></div>';
			unset($_POST['email']);
			unset($_POST['name']);
			unset($_POST['subject']);
			unset($_POST['emailMessage']);
		}else{
			$errMessage = $errMessage . '</div></div></div>';
			echo $errMessage;
		}
	}
?>