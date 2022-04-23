<?php
	$conn = mysqli_connect("localhost", "root", "", "thesis");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>