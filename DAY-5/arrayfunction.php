<?php
//count() function
$a = array('java','php','javascript','html','css');
echo "length of array:<br>";
echo count($a);

//array_count_values()
$a = array('php','php','javascript','html','css');
$newarr = array_count_values($a);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}

//sum()
echo"<br>";
echo "sum of array:<br>";
$b = array(0,2,3,4,5);
echo array_sum($b);

//product()
echo"<br>";
echo "product of array:<br>";
$b = array(1,1,3,4,1);
echo array_product($b);

//reverse()
echo"<br>";
echo "reverse of array:<br>";
$arr = array('html', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);


//in_array()
echo"<br>";
$a = array('php', 'c++', 'java', 'android', 'php');
$temp = in_array('c',$a);
echo var_dump($temp);

// array_rand()
echo"<br>";
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);//Returns Array Index
echo $arr[$indexofarray];

//multiple keys random  //array_rand()
echo"<br>";
$arr = array('java', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);//
foreach ($indexofarray as $key => $value)
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}

//array_unique()
echo"<br>";
$a = array('java', 'c','android', 'java', 'android', 'php');
echo"<pre>";
print_r(array_unique($a));
echo"<pre>";

//merge()
echo"<br>";
$arr1 = array('c++','java','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);


//array_search()
echo"<br>";
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check; 

//range()
echo"<br>";
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /><b> $key - $value</b> ";
} 
echo"<br>";
$a = range('a','e');
 print_r($a);


//sort()
echo"<br>";
$arr = array(80,70,50,40,8,99);
sort($arr);
print_r($arr);

//rsort()
echo"<br>";
$arr = array(80,60,50,40,8,99);
rsort($arr);
print_r($arr);

//ashort()
echo"<br>";
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);

//kshort()
echo"<br>";
$arr = array(
    "Banana" => "Yellow",
    "Apple" => "black",
    "Mango" => "Green");
    ksort($arr);
    foreach ($arr as $key => $value) {
    echo "<br />$key - $value ";
    }
?>
    