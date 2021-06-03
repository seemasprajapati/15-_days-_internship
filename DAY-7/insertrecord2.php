<html>
<head>
<title>insert table</title>
</head>
<body>
<h2> STUDENT FORM</h2>
<h3>fill up the form</h3>
<form  method="post" >
<table border="0" >
<tr>
<td>Name:</td><td><input  type="text" name="txt1" required /> </td>
</tr><br>
<tr>
<td>Age: </td><td><input  type="number" name="txt2"  required/> </td>
</tr>
<tr>
<td>gender:</td><td><select name="txt3">
                   <option>Male</option>
                   <option>female</option>
                   </select><br> </td>
<tr>
<td>dob:</td><td><input type="text" name="txt4"   required/> </td>
</tr>
<tr>
<td>email:</td><td><input  type="text" name="txt5" required /> </td>
</tr><br>
<tr>
<td>mobile:</td><td><input  type="number" name="txt6" required /> </td>
</tr><br>
<tr>
<td>address:</td><td><input  type="text" name="txt7" required /> </td>
</tr><br>
<tr>
<td>Pincode:</td><td><input  type="number" name="txt8" required /> </td>
</tr><br>
<tr>
<td>area:</td><td><select name="txt9">
                   <option>gujarat</option>
                   <option>Bharuch</option>
                   <option>surat</option>
                   <option>gandhinagar</option>
                   </select><br> </td>
</tr><br>
<tr>
<td>bloodgroup:</td><td><input  type="text" name="txt10" required /> </td>
</tr><br>
<td><input type="submit" name="submit" /> </td><td>
<input type="reset" name="reset" /></td></tr>
</table>
</form></body>
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
    $age=$_POST['txt2'];
    $gender=$_POST['txt3'];
    $dob=$_POST['txt4'];
    $email=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $pincode=$_POST['txt8'];
    $area=$_POST['txt9'];
    $bloodgroup=$_POST['txt10'];
  

     $q=mysqli_query($connection,
      "insert into tbl_student(st_name,st_age,st_gender,st_dob,st_email,st_mobile,st_address,st_pincode,st_area,st_bloodgroup) 
       values('{$name}','{$age}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$pincode}','{$area}','{$bloodgroup}')")
       or die("Error".mysqli_error($connection));
       
   
    if($q)
      {
        echo "<script>alert('Record Added');</script>";
       }
    }
    
    echo"<a href='display2.php'; >Display Record</a>";
?>
   