<?php
     //krshort()
     echo"<br>";
     $arr = array(
         "Banana" => "Yellow",
         "Apple" => "Red",
         "Mango" => "Green");
         krsort($arr);
         foreach ($arr as $key => $value) {
         echo "<br />$key - $value ";
         }
 
 
 //shuffle()
 echo"<br>";
  $myArray = array("Football", "Baseball", "Hockey", "dancing","Boxing");
   shuffle($myArray);
    foreach ($myArray as $key => $value) {
     echo "<br /> $value ";}
 
 
  //array_key_exists()
  echo"<br>";
  $arr = array("a" => "apple", "b" => "dance");
 echo array_key_exists('b',$arr);
 
 //array_change_key_case()
 echo"<br>";
 $arr = array(
     "Banana" => "Yellow",
     "Apple" => "Red",
     "Mango" => "Green");
     $uppercase = array_change_key_case($arr,CASE_UPPER);
     print_r($uppercase);
 
     //array_combine()
     echo"<br>";
     $arr1 = array("Banana" , "Apple" , "Mango");
     $arr2 = array("Yellow","Red", "Green");
     $NewVar = array_combine($arr1, $arr2);
     print_r($NewVar);
       
     //end()
     echo"<br>";
     $myarr = array('c', 'c++','android', 'java', 'php');
     echo end($myarr);
 
 
     //compact()
     echo"<br>";
     $name = "riya";
    $subject = "html";
    $arr = compact("name", "subject");
     print_r($arr);
 
     //array_flip()
     echo"<br>";
     $arr = array("a" => "akash", "b" => "banana", "c" => "computer");
    $fliparray = array_flip($arr);
     print_r($fliparray);
 
     //array_diff()
     echo"<br>";
     $a=array("html","c","c++","java","php","android");
    $b=array("akash","c","java","php");
    $diff = array_diff($a, $b);
    print_r($diff);
    
    //array_intersect()
    echo"<br>";
    $arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
    $arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
      print_r(array_intersect($arr1,$arr2));
 
      //array_values()
      echo"<br>";
      $arr = array("i"=>"c","want"=>"c++","learn"=>"php");
    $myarr = array_values($arr);
    foreach($myarr as $key => $value) {
    echo " <br />$key - $value";
    }
 
    //array_push()
    echo"<br>";
    $a=array("c","c++");
    array_push($a,"html","c","php");
    print_r($a);
 
     //array_pop()
      echo"<br>";
     $a = array("c", "c++", "Java", "PHP", "html");
     array_pop($a); 
     print_r($a);
     array_pop($a); 
     print_r($a);
 
     //explode()
     echo"<br>";
     $mystring = "I Love PHP Language";
     $a = explode(" ",$mystring);
     print_r($a);
 
      //implode()
      echo"<br>";
      $arr = array("i","love","html","language");
      $m = implode(" ", $arr);
      echo $m;   
 ?>
 
 