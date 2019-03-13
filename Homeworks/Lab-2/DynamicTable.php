<h1>This is dynamically generated table element</h1>

<!-- To let text be treated as php code, php tag must be declared -->
<?php
// Declares following lines are php code, send it to php interpreter
/*
    echo - writes on the http output
 */
echo "<table>"; // Open the "table" html tag
for($i=0; $i<5; $i++){ //Standard for loop
  echo "<tr>";//Open Table Row tag
  for($j = 0; $j <=$i; $j++)//Standard for loop that loops i times
    echo '<td>'.$j.'</td>';//Write Table Data with j then immediately close the tag
  
  echo "</tr>"; // Close Table Row tag
}
echo "</table>";// Close the "table" html tag
//Tells that it is the end of php code
?>
<!-- After closing the php tag browser will treat the following lines as by default html -->