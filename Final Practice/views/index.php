<?php
 session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<title> Course Details </title>
	<link rel="stylesheet" href="../views/CSS/style.css">
</head>
<body>
	<form action="../controller/formController.php" method="POST">
		name: <input type="text" name="name" id="name"><span id="nerr"></span>
		status: 
		<select id="status" name="status">
			<option value="instock">IN-Stock</option>
			<option value="outstock">OUT-Stock</option>
		</select>
		price: <input type="number" name="price" id="price"> <span id="perr"></span>
		<br><br>
		<button type='submit' name='action' id='insert' value='insert'>Create</button>
		<button type='submit' name='action' id='delete' value='delete'>Delete</button>

		<span>
			<table>
				<thead>
					<tr>
						<th>name</th>
						<th>status</th>
						<th>price</th>
					</tr>
				</thead>
				<tbody>
					<?php
						
						if(isset($_SESSION['courses'])){
							$courses = $_SESSION['courses'];
							foreach($courses as $course){
								echo "<tr>";
								echo "<td>";
								echo $course['name'] ;
								echo "</td>";

								echo "<td>";
								echo $course['status'] ;
								echo "</td>";

								echo "<td>";
								echo $course['price'] ;
								echo "</td>";
								echo "</tr>";
							}
						}
						
					?>
				</tbody>
			</table>
		</span>
	</form>
	<script src='./script/script.js'></script>
</body>
</html>