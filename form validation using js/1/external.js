function validate(form) {
	let isValid = true;
	document.getElementById("fullnameErrMsg").innerHTML = "";
	document.getElementById("passwordErrMsg").innerHTML = "";
	if(form.fullname.value === "") {
		document.getElementById("fullnameErrMsg").innerHTML = "Please fill up the fullname";
		isValid = false;
	}
	if (form.password.value === "") {
		document.getElementById("passwordErrMsg").innerHTML = "Please fill up the password";
		isValid = false;
	}
	return isValid;
}