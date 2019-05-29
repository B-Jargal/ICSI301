<?php
if(isset($_POST["ID"])){
		$servername = "localhost";
		$username = "username";
		$password = "password";
		$dbname = "username";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if($conn->query("DELETE FROM students WHERE id = \"".$_POST["ID"]."\"")===TRUE){
			echo "Successfully deleted id:".$_POST["ID"]." student";
		}
		else{
			echo "delete failed due to ".$conn->error;
		}
		echo "<br>";
		echo "INSERT INTO students
		VALUES (".$_POST["fName"].",
		".$_POST["lName"].",
		".$_POST["ID"].",
		".$_POST["BD"].",
		".$_POST["Pass"].");";
		echo "<br>";
		if($conn->query("INSERT INTO students
		VALUES ('".$_POST['fName']."',
		'".$_POST['lName']."',
		'".$_POST['ID']."',
		'".$_POST['BD']."',
		'".$_POST['Pass']."');")===TRUE){
		echo "Successfully edited id:".$_POST["ID"]." student";
	}
	else{
	echo "Error:".$conn->error;
}
		exit();


}
else{


}
?>


<html style="align-items: center; justify-content:  center; display: flex; height: 100%;">
<body>

<form action="update.php" method="post">
	<div>
First Name: <input type="text" name="fName" value = <?php echo $_GET["fName"]; ?>><br>
</div>
	<div>Last Name: <input type="text" name="lName"  value = <?php echo $_GET["lName"]; ?>><br></div>
	<div>ID: <input type="text" name="ID" value= <?php echo $_GET["ID"]; ?>><br></div>
	<div>Birthdate: <input type="text" name="BD" value = <?php echo $_GET["BD"]; ?>><br></div>
	<div>Password: <input type="text" name="Pass" value = <?php echo $_GET["Pass"]; ?>><br></div>
<input type="text" value= <?php echo $_GET["ID"]; ?> name ="oID" style="display: none;">
<input type="submit" value="Edit!">
</form>

</body>
</html>
