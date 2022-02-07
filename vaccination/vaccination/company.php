
<?php
include 'dbcon.php';
session_start();


 $id = $_SESSION['login_id'];
  
?>
<?php

 $qry="select * from `companyreg` where comregid='$id'";
 
//echo $qry;

      $a = mysqli_query($con, $qry) or die(mysqli_error($con));
     while( $rest=mysqli_fetch_array($a))
     {
     $Companyname=$rest['Companyname'];
      $sector=$rest['Sector'];
      $Regno=$rest['Regno'];
     $Location=$rest['Location'];
      $postid=$rest['postid'];
      $Phone=$rest['Phone'];
      
      //$Email=$rest['Email'];
     
    


?>

        <?php
     }
     ?>
	
	
	