<?php
//numeric array
//method 1
$a[0]=30;
$a[1]=30.10;
$a[2]="A";
$a[3]=30;

//method 2 //Dynamic array
$a[]=30;
$a[]=30.10;
$a[]="A";
$a[]=30;

//method 3
$a=array(10,20,"java","C",30.10);
echo $a[2];

//print the whole array
for($x=0;$x<count($a);$x++)
{
    echo"</br>".$a[$x];
}

echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";
?>

