<?php
echo "<h1>Table</h2>";
echo"<table border='1'>";
for ($x = 1; $x <= 10; $x++) {
    echo"<tr>";
    
    if($x%2==0) {
        echo" <td bgcolor='yellow'>$x</td>";
    }
    else{
        echo" <td bgcolor='green'>$x</td>";
     }
    echo"</tr>";
}
echo"</table>";
?>
