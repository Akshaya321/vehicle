<?php
include "../dbcon.php";
$kid=$_GET["uid"];
mysqli_query($con,"DELETE FROM `companyreg` WHERE comregid='$kid'");
header("Location:viewcompanydetails.php")
?>
