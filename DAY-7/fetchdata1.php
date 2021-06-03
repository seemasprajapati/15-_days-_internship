<?php
$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);

$q=mysqli_query($connection,
   "select * from tbl_user")
    or die("Error".mysqli_error($connection));
//   fetch data as numeric array
  $row=mysqli_fetch_row($q);
  //debug  //method 1
  print_r($row);
 echo $row[0].$row[1].$row[2].$row[3];


//method 2 //numeric and associative
$row=mysqli_fetch_array($q);
echo"<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo"<br>";
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_moblie'];


    