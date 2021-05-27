<?php
function prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 47;
$a = prime($num);
if ($a== 1)
   echo "<h2>$num is a prime number</h2>";
else
   echo "<h2>$num is a non-prime number</h2>";
?>