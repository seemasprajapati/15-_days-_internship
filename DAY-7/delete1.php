<?php
 
$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);

$id=$_GET['deleteid'];
echo $id;

//$q=mysqli_query($connection, "delete from tbl_user where user_id='{$id}'")   //hard delete query
//or die(mysqli_error($connection));


$q=mysqli_query($connection, "update tbl_user set is_delete=1 where user_id='{$id}'")  or die(mysqli_error($connection));
if($q){
    echo"<script>alert('Record deleted');window.location='display1.php';</script>";
}