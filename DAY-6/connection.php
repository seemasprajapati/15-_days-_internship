<?php
$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);
echo "succsessfull connection";

$q=mysqli_query($connection,
   "insert into tbl_user(user_name,user_gender,user_moblie)  values('maahi','female','123576689')")
    or die("Error".mysqli_error($connection));
  
    if($q)
    {
        echo "<script>alert('Record Added');</script>";
    }
?>
