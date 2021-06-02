<?php
 $host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);

//$q=mysqli_query($connection ,"select * from tbl_student") or die(mysqli_error($connection));
$q=mysqli_query($connection ,"select * from tbl_student where is_delete= 0") or die(mysqli_error($connection));
echo"<h2>Student Table</h2>";
echo"<table border='1'>";
echo"<th>Id</th>";
echo"<th>Name</th>";
echo"<th>Age</th>";
echo"<th>Gender</th>";
echo"<th>Dob</th>";
echo"<th>Email</th>";
echo"<th>Mobile</th>";
echo"<th>Address</th>";
echo"<th>Pincode</th>";
echo"<th>Area</th>";
echo"<th>bloodgroup</th>";
echo"<th>Action</th>";


while($row=mysqli_fetch_array($q)){
    echo"<tr>";
    echo"<td>{$row['st_id']}</td>";
    echo"<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_age']}</td>";
    echo"<td>{$row['st_gender']}</td>";
    echo"<td>{$row['st_dob']}</td>";
    echo"<td>{$row['st_email']}</td>";
    echo"<td>{$row['st_mobile']}</td>";
    echo"<td>{$row['st_address']}</td>";
    echo"<td>{$row['st_pincode']}</td>";
    echo"<td>{$row['st_area']}</td>";
    echo"<td>{$row['st_bloodgroup']}</td>";
    echo"<td><a href='delete2.php?di={$row['st_id']}'>Delete</a></td>";
    echo"</tr>";
}

echo"</table>";
echo"<a href='insertrecord2.php'; >Add New Record</a>";
?>