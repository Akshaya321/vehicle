<?php
include "../dbcon.php";
$kid=$_GET["uid"];
mysqli_query($con,"DELETE FROM `userrregistration` WHERE Userid='$kid'");
header("Location:view3.php")
?>
