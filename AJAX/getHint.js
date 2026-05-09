document.getElementById("name").addEventListener('keyup',valueinput);

function valueinput(){
	const str = document.getElementById("name").value;
	const xhttp = new XMLHttpRequest();
	xhttp.onload = function(){
		const data = JSON.parse(xhttp.responseText);//responseText
		document.getElementById("txtHint").innerHTML = data ;
	}
	xhttp.open("GET","getHint.php?q="+str,true);
	xhttp.send();
}

function (){
	const xhttp = new XMLHttpRequest();
	xhttp.onload = function(){
		const data = JSON.parse(xhttp.responseText);//responseText
		document.getElementById("txtHint").innerHTML = data ;
	}
	xhttp.open("GET","getHint.php",true);
	xhttp.send();
}