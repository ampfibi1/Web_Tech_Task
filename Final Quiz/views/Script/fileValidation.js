const file = document.getElementById("file_submission");
console.log("JS Loaded");

function valid(){

	let img = document.getElementById("imgUpload");
	let errmsg = document.getElementById("errmsg");


	let len = img.files.length;

	if(len === 0){
		errmsg.innerHTML = "Please Select a file";
		return false;
	}

	let type = img.files[0].type;

	if(type.startsWith("image/")){
		errmsg.innerHTML = "OKAY<br><br>";
		return true;

	}else{

		errmsg.innerHTML = "Not an image<br><br>";
		return false;
	}
}

file.addEventListener('submit', function(e){

	if(!valid()){
		e.preventDefault();
	}

});