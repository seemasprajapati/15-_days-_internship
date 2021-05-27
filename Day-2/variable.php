<?php //varible
     $name="echo";
     
     $income=100;
     echo"this $name has $income<br>";

     //local variable
function local() {
    $x = 5; 
    echo "<p>Variable x  is: $x</p>";
  } 
local();

  //globle variable
  
 $x = 5;
  $y = 10;
   function run()
    {
     global $x, $y;
     $y = $x + $y;
     
    } 
run();  
echo $y;
echo"<br>"; 
echo"variable is globle";
  ?>