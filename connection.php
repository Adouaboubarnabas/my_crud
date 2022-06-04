<?php
// connexion a la base de donneé.
	 $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
	if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
	}
	
?>