<?php

if(isset($_POST["ID"])){
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "username";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->query("INSERT INTO students
		VALUES ('".$_POST['fName']."',
		'".$_POST['lName']."',
		'".$_POST['ID']."',
		'".$_POST['BD']."',
		'".$_POST['Pass']."');")===TRUE){
		echo "Successfully added id:".$_POST["ID"]." student";
	}
	else{
	echo "Error:".$conn->error;
  }
		exit();
}


?>

<form action="insert.php" method="post">
	<div>First Name: <input type="text" name="fName" ><br></div>
	<div>Last Name: <input type="text" name="lName"><br></div>
	<div>ID: <input type="text" name="ID" ><br></div>
	<div>Birthdate: <input type="text" name="BD"><br></div>
	<div>Password: <input type="text" name="Pass" ><br></div>
<input type="submit" value="INSERT!">
</form>
