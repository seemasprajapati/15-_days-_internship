<?php // string function
$name="riya";
echo"$name";
echo"<br>";
//length
echo strlen($name);
echo"<br>";
//count
echo str_word_count($name);
echo"<br>";
//rev
echo strrev($name);
echo"<br>";
//postion
echo strpos($name ,"a");
echo"<br>";
//replace
echo str_replace("a" ,"h",$name);
echo"<br>";
//repeat
echo str_repeat($name,10);
echo"<br>";
//trim
echo rtrim("<pre> this is good </pre>");

echo ltrim("<pre> this is good </pre>");
  ?>

