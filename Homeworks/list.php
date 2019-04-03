<?php 

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "students";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT  firstname, lastname, id, birth_date, password FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>birth_date</th><th>password</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td><td>".$row["birth_date"]."</td><td>".$row["password"]."</tr>"."<a href=delete.php?id=".$row["id"].">Delete</a>|<a href=update.php?id=".$row["id"].">Edit</a>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

 echo "<a href = \"insert.php\"><button></a>"
 ?>