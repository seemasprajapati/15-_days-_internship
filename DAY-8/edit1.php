
<?php
$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);
//echo "succsessfull connection";
echo"<br>";


if(!isset($_GET['id'])||empty($_GET['id'])){
  header("location:display1.php");
}
$editid=$_GET['id'];
$selectq=mysqli_query($connection,
   "select * from tbl_user where user_id='{$editid}'")
    or die("Error".mysqli_error($connection));
  $selectrow=mysqli_fetch_array($selectq);
  //print_r($selectrow);
    
  if($_POST)
   {
    $txt1 =$_POST['txt1'];
    $txt2=$_POST['txt2'];
    $txt3=$_POST['txt3'];
  

 $uq=mysqli_query($connection,"update tbl_user set user_name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$editid}' ")
 or die("Error".mysqli_error($connection));

 if($uq){
     echo "<script>alert('record updated');window.location='display1.php';</script>";
   }
   }
  ?>

<html>
       <body>
         <form method="post">
         
              name:<input type="text"  value="<?php echo $selectrow['user_name'];?>"  name="txt1"/><br>
              gender:Male<input type="radio" <?php if($selectrow['user_gender']=="Male") {echo"checked";}?> value="Male" name="txt2"/>
              female  <input type="radio"  <?php if($selectrow['user_gender']=="female") {echo"checked";}?>  value="female" name="txt2"/><br>
               mobile no: <input type="number"   value="<?php echo $selectrow['user_mobile'];?>"   name="txt3"/><br>
                <input type="submit"/>
                </form>
                </body>
                </html>
              
                
