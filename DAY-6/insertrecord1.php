<html>
       <body>
         <form method="post">
              name:<input type="text" name="txt1"/><br>
              gender:<select name="txt2">
                   <option>Male</option>
                   <option>female</option>
                   </select><br>
                mobile no: <input type="number"  name="txt3"/>
                <input type="submit"/>
                </form>
                </body>
                </html>
                
<?php

$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);
  
   if($_POST)
   {
    $name =$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];
  

     $q=mysqli_query($connection,
      "insert into tbl_user(user_name,user_gender,user_moblie)  values('{$name}','{$gender}','{$mobile}')")
       or die("Error".mysqli_error($connection));
       
   
    if($q)
      {
        echo "<script>alert('Record Added');</script>";
       }
    } 

    echo"<a href='display1.php'; >Display  Record</a>";
?>
   