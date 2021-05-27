<?php
$a=$_POST['txt1'];
$b=$_POST['txt2'];
 
echo "Given input is: "; 
echo $a;
echo"</br>";
echo $b;
echo"</br>";

if($a < $b)
{
echo "<h3> $b is a Big number</h3> " ;
}
elseif($a > $b){
echo " <h3>$a is a Big number</h3> " ;
}
   else{
    echo " <h3>both equal</h3> " ;
   }
?>