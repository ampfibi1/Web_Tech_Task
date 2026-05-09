document.getElementById('product').addEventListener('change',valid);

function valid(){
	//console.log(document.getElementById('product').value);
	const product =  document.getElementById('product').value ; 
	const XMLhttp = new XMLHttpRequest();
	XMLhttp.onload = function(){
		let data = JSON.parse(this.responseText);//note
		document.getElementById('details').innerHTML = data ; 
	};
	XMLhttp.open("GET","detailsHint.php?q="+product,true);
	XMLhttp.send();
}

function userInfo(){
	const XMLhttp = new XMLHttpRequest();
	XMLhttp.onload = function(){
		let data = JSON.parse(this.responseText);//note
		let val = "";
		for(let i=0; i<data.length; i++){
			val += data[i].id + "," + data[i].name +"," +
					data[i].password + "," + data[i].email +"<br>" ;
		}
		document.getElementById('userinfo').innerHTML =val
	};
	XMLhttp.open("GET","userInfo.php",true);
	XMLhttp.send();
}userInfo();