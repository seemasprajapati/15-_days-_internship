<!DOCTYPE html>
<html>
<body>

<?php
$color = array("yellow", "green", "pink"); 
echo "<h3>I love " . $color[0] . ", " . $color[1] . " and mostly " . $color[2] . ".</h3>";

//length of array
echo "length of array is ". count($color);
echo"<br>";
//Associative array

$bio = array("name"=>"riya", "surname"=>"patel");
echo "name is " . $bio['name'] ;
echo"<br>";
//loop through

foreach($bio as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>


</body>
</html>
