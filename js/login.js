function validEmail(email){
	var regexStmt = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	return regexStmt.test(String(email).toLowerCase());
}
window.onload = function(){
	document.getElementById("email").onkeydown = function(){
		email.style.backgroundColor = "#FFFFFF";
		email.style.border = "none";
	}
	document.getElementById("password").onkeydown = function(){
		password.style.backgroundColor = "#FFFFFF";
		password.style.border = "none";
	}
}
function validateForm(){
	let form = document.forms["login-form"];
	let email = form["email"];
	let password = form["password"];
	let errorExists = false;
	if(email.value === null || email.value === ""){
		email.style.backgroundColor = "#F35F5F";
		email.style.border = "2px solid red";
		errorExists = true;
	}
	else if(!validEmail(email.value)){
		errorExists = true;
	}
	if(password.value === null || password.value === ""){
		password.style.backgroundColor = "#F35F5F";
		password.style.border = "2px solid red";
		errorExists = true;
	}
	if(errorExists === true){
		let loginErr = document.getElementById("formjs-error");
		loginErr.innerHTML = "Fill out the required fields with valid values.";
		loginErr.style.display = "inline-block";
		loginErr.style.backgroundColor = "#F35F5F";
		return false;
	}else{
		return true;
	}
}