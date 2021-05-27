<?php
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];

echo" Hindi: $a<br>";
echo" Gujrati: $b<br>";
echo"English: $c<br>";
echo"Maths: $d<br>";
echo"Science: $e";

//Sum of SUbject
echo"<h3>Total :" . $m=($a+$b+$c+$d+$e) ."</h3>";
echo"<h3>Percentage :"  ($percentage=$m/5)%."</h3>";
// Class
if($m>=80)
{
echo "<h3>Get First class</h3> " ;
}
elseif($m >=60){
echo " <h3>Get Second class</h3> " ;
}
elseif($m >=50){
    echo " <h3>Get Pass class</h3> " ;
    }
    else{
        echo " <h3>fail </h3> " ;
    }


    ?>
  
     


