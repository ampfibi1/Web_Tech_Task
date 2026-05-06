const login_form_submit = document.getElementById("login_form");
console.log("this page run ") ; 

function is_valid(){
	let flag = true ; 

	const name = document.getElementById("username").value;
	const password = document.getElementById("password").value;

	document.getElementById("errUser").innerHTML = "" ; 
	document.getElementById("errPass").innerHTML = "" ; 

	if(name===""){
		document.getElementById("errUser").innerHTML = "username missing" ; 
		flag = false ; 
	}
	if(password===""){
		document.getElementById("errPass").innerHTML = "password missing" ; 
		flag = false ;
	}

	return flag; 
}
login_form_submit.addEventListener('submit', function (e){
	if(!is_valid()){
		e.preventDefault();
	}
});
