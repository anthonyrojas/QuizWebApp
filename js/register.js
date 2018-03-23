function validEmail(email){
	var regexStmt = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
	return regexStmt.test(String(email).toLowerCase());
}

window.onload = function(){
	let firstName = document.getElementById("firstName");
	let lastName = document.getElementById("lastName");
	let email = document.getElementById("email");
	let password = document.getElementById("password");
	let confirmPassword = document.getElementById("confirmPassword");
	let confirmPasswordText = document.getElementById("confirmPasswordText");
	let errorExists = false;
	firstName.onkeydown = function(){
		firstName.style.backgroundColor = "#FFFFFF";
		firstName.style.border = "none";
	}
	lastName.onkeydown = function(){
		lastName.style.backgroundColor = "#FFFFFF";
		lastName.style.border = "none";
	}
	email.onkeydown = function(){
		email.style.backgroundColor = "#FFFFFF";
		email.style.border = "none";
	}
	password.onkeydown = function(){
		password.style.backgroundColor = "#FFFFFF";
		password.style.border = "none";
	}
	confirmPassword.onkeyup = function(){
		if(password.value !== null && password.value !== ""){
			if(confirmPassword.value !== password.value){
				confirmPassword.style.border = "2px solid red";
				confirmPasswordText.style.display = "block";
				confirmPasswordText.style.color = "red";
				confirmPasswordText.innerHTML = "Passwords do not match.";
			}
			else if(confirmPassword.value === password.value){
				confirmPassword.style.border = "2px solid green";
				confirmPasswordText.style.color = "green";
				confirmPasswordText.style.display = "block";
				confirmPasswordText.innerHTML = "Passwords match!";	
			}
		}
	}
}

function validateForm(){
	errorExists = false;
	if(firstName.value === null || firstName.value === ""){
		firstName.style.backgroundColor = "#F35F5F";
		firstName.style.border = "2px solid red";
		errorExists = true;
	}
	if(lastName.value === null || lastName.value === ""){
		lastName.style.backgroundColor = "#F35F5F";
		lastName.style.border = "2px solid red";
		errorExists = true;
	}
	if(email.value === null || email.value === ""){
		email.style.backgroundColor = "#F35F5F";
		email.style.border = "2px solid red";
		errorExists = true;
	}else if(!validEmail(email.value)){
		email.style.backgroundColor = "#F35F5F";
		email.style.border = "2px solid red";
		errorExists = true;
	}
	if(password.value === null || password.value === ""){
		password.style.backgroundColor = "#F35F5F";
		password.style.border = "2px solid red";
		errorExists = true;
	}else if(password.value != confirmPassword.value){
		confirmPasswordText.innerHTML = "Passwords do not match.";
		confirmPasswordText.color = "red";
		confirmPasswordText.display = "block";
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