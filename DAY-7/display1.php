<?php

$host="localhost";
$username="root";
$password="";
$dbname="db_internship";

//connection function
$connection=mysqli_connect($host,$username,$password,$dbname);
//query
//$q=mysqli_query($connection, "select * from tbl_user ")  or die("Error".mysqli_error($connection));//hard delet
$q=mysqli_query($connection, "select * from tbl_user where is_delete=0")  or die("Error".mysqli_error($connection)); //soft delete
    echo"<h2>User Table</h2>";
    echo"<table BORDER='1'>";
    echo"<tr>";
    echo"<th>ID</th>";
    echo"<th>NAME</th>";
    echo"<th>GENDER</th>";
    echo"<th>MOBILE</th>";
    echo"<th>ACTION</th>";
    echo"</tr>";

    while($row=mysqli_fetch_array($q)){
         
        echo"<tr>";
        echo"<td>{$row['user_id']}</td>";
        echo"<td>{$row['user_name']}</td>";
        echo"<td>{$row['user_gender']}</td>";
        echo"<td>{$row['user_mobile']}</td>";
        echo"<td><a href='delete1.php?deleteid={$row['user_id']}'>Delete</a></td>"; 
        echo"</tr>";
    }
    echo"</table>";
    echo"<a href='insertrecord1.php'; >Add New Record</a>";
    ?>