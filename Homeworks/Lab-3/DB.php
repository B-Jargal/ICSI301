<?php

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("USE username");

$create_table_students = "CREATE TABLE students (
 firstname varchar(20) NOT NULL,
 lastname varchar(20)NOT NULL,
 id text NOT NULL,
 birth_date date NOT NULL,
 password text,
 PRIMARY KEY (firstname, lastname)
);";
if ($conn->query($create_table_students) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$create_table_majors = "CREATE TABLE majors(
name varchar(20) NOT NULL,
auth_date date,
FOREIGN KEY (name) REFERENCES students(firstname));";

if ($conn->query($create_table_majors) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


$create_table_courses = "CREATE TABLE courses(
name varchar(20) NOT NULL,
id varchar(6) NOT NULL,
credit_hours int
);";

if ($conn->query($create_table_courses) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$create_table_course_selection="CREATE TABLE course_selection(
student_name varchar(20) NOT NULL,
course_id varchar(6) NOT NULL,
FOREIGN KEY (student_name) REFERENCES students(firstname),
FOREIGN KEY (course_id) REFERENCES courses(id));";

if ($conn->query($create_table_course_selection) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

for($i =0; $i < 5; $i++){

	$insert_into_students[$i] = "INSERT INTO students
	VALUES ('fName".$i."',
	'lName".$i."',
	'17B1NUM".$i."',
	'2019-03-2".$i."',
	'".$i."');";


if ($conn->query($insert_into_students[$i]) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

}



$conn->close();
 ?>
