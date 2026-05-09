
console.log("THIs PAGE LOAD");
document.getElementById("insert").addEventListener('click',function(e){
	if(!valid()) {
		e.preventDefault();
	}
});
reload_table();
function valid(){
	let f = true;
	if(document.getElementById("title").value==="" || document.getElementById("author").value==="" ) {
		f=false; 
		document.getElementById("msg").innerHTML = "Something Required"; 
	}else{
		reload_table();
	}
	return f; 
}

function reload_table(){
	let table = document.getElementById("table"); 
	const xmlhttp = new XMLHttpRequest();

	xmlhttp.onload = function(){
		let data = JSON.parse(this.responseText);

		let tableData = "" ; 

		tableData += 
		"<table> <tr><th>id</th> <th>title</th> <th>author</th> <th>catagory</th> <th>status</th></tr>"

		for(let i=0; i<data.length; i++){
			tableData += "<tr><td>"+data[i].id+"</td><td>"+data[i].title+"</td><td>"+
					data[i].author+"</td><td>"+data[i].catagory+"</td><td>"+data[i].status+"</td></tr>";
		}

		tableData += "</table>"; 
		table.innerHTML = tableData ; 
	}
	xmlhttp.open("GET","../Controller/dataLoad.php",true);
	xmlhttp.send();
}