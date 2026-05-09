document.getElementById('insert').addEventListener('click',function(e){
	if(!valid()) e.preventDefault();
});
function valid(){
	let f = true ; 
	document.getElementById("nerr").innerHTML = "";
	document.getElementById("perr").innerHTML = "" ;
	
	if(document.getElementById("name").value === ""){
		f = false ;
		document.getElementById("nerr").innerHTML = "put the name" ;
	} 
	if(document.getElementById("price").value === ""){
		f = false ;
		document.getElementById("perr").innerHTML = "put the price" ;
	} else{
		if(Number.parseInt(document.getElementById("price").value)<0){
			f=false;
			document.getElementById("perr").innerHTML = "price not less than zero" ;
		}
	}
	return f;
}