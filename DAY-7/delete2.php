<?php
$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);

$id=$_GET['di'];
    echo $id;

//$q=mysqli_query($connection, "delete from tbl_student where st_id='{$id}'")  or die("Error".mysqli_error($connection));
$q=mysqli_query($connection, "update tbl_student set is_delete=1 where st_id='{$id}'")  or die("Error".mysqli_error($connection));

if($q){
    echo"<script>alert('Record deleted');window.location='display2.php';</script>";
}

