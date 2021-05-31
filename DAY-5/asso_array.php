<?php
//Associative array
//method 1
$a[0]=10;
$a['a']=30.10;
$a[10]="A";
$a['html']="web development";
$a[4]=4;

//method 2

$a=array(
    0=>10,
    "a"=>30.10,
     10=>"A",
     "html"=>"web development",
     4=>4
);

echo "a for ".$a['a'];

foreach($a as $value){
    echo "<br>value is $value";
}

foreach($a as $key=>$value){
    echo "<br>key is $key and value is<b> $value</b>";
}


echo"<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";
?>

