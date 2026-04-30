const form = document.getElementById("loginForm");

function validation(){
	document.getElementById("unameError").innerHTML="";
	document.getElementById("upassError").innerHTML="";

	let isValid = true; 
	if(document.getElementById("name").value===""){
		document.getElementById("unameError").innerHTML="fill the name";
		isValid = false; 
	}
	if(document.getElementById("pass").value===""){
		document.getElementById("upassError").innerHTML="fill the password";
		isValid = false ;
	}
	return isValid;
}

form.addEventListener("submit", function(event){
    if(!validation()){
        event.preventDefault();
    }
});