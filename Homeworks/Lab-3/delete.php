<?php 
	if($_GET["id"]){
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "username";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->query("DELETE FROM students WHERE id = \"".$_GET["id"]."\"")===TRUE){
			echo "Successfully deleted id:".$_GET["id"]." student";
		}
		else{
			echo "delete failed due to ".$conn->error;
		}
		exit();
	}
 ?>
 