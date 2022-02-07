<?php
session_start();
 include 'dbcon.php'; 
  $id=$_GET['id'];
//$query=("SELECT * FROM userrregistration where Status='0'");
// $result=mysqli_query($con,$query);
// $rowm=mysqli_fetch_array($result);
// $id=$rowm['Userid'];
// $qry=("SELECT * FROM login where login_id='$id'");
// $rows=mysqli_query($con,$qry);
//echo $qry;


//echo $r;
$sql="UPDATE login set Status=1 where login_id=$id";
//echo $sql;
$res=mysqli_query($con,$sql);
//$row=mysqli_fetch_array($res);
//$r=$row['login_id'];
$sqls="UPDATE userrregistration set Status=1 where `Userid` = '$id'";
//echo $sqls;
$ress=mysqli_query($con, $sqls);

 //$sql="update table tb_login set status=1 where `Log_id` = '$id'";
 //$res=mysqli_query($con, $sql);

if($res=1)
{
 if($ress=1)

      {
         
        echo"<script>alert('Approved.........');
 
        document.location=('userapprove.php');
        </script>";
      }
    }   
 ?>