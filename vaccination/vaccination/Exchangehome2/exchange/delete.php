<?php
include '../../dbcon.php';
 
//getting id of the data from url
$id = $_GET['id'];
 
 
//deleting the row from table
echo $sql="update login set Status='0' where `login_id` = '$id'";
$result = mysqli_query($con,$sql);
 //echo $result;
//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>