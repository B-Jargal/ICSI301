<?php 
require('student.php');
require('course.php');
require('sisi.php');


$test = new SiSi();
$test->generateStudents(10);
echo "<h2>Generated Student Array</h2>";
$test->printStudents();
echo "<h2>Searching Students with 1 in their first name</h2><br>";
echo "<h3>".(string)(sizeof($test->findStudent("1",$test->StudentArray)))."</h3>";
echo "<h3> Sorting Students</h3>";
$test->sortStudentsAlphabetical();
$test->printStudents();
?>