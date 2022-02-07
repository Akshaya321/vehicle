<?php
include 'dbcon.php';
session_start();


//$id = $_SESSION['login_id'];
  
?>
<?php

 echo $qry="select * from `login` where Usertype='2' and Status='0'" ;
 $a = mysqli_query($con, $qry) or die(mysqli_error($con));
 while ($rests=mysqli_fetch_array($a)) {
     echo $logid=$rests['login_id'];
 $results = mysqli_query($con, "SELECT * from  tbl_payment as p JOIN userrregistration as u where p.Userid=u.Userid"); 
// print_r($results);
// return;
     //echo $results;
      //$b = mysqli_query($con, $results) or die(mysqli_error($con));
      while ($rest=mysqli_fetch_array($results)) {
         //$logid=$rests['login_id'];
        //  $qrys="select * from companyreg where comregid='$logid'";
        //  $b=mysqli_query($con, $qrys);
        //  while ($rest=mysqli_fetch_array($b)) {
             $Name=$rest['Name'];
             $DOB=$rest['DOB'];
             $Gender=$rest['Gender'];
             $Phoneno=$rest['Phoneno'];
             $Place=$rest['Place'];
             $Housename=$rest['Housename'];
             $Date=$rest['districtname'];
              $Time=$rest['Time'];
              $Department=$rest['Department'];
            //  $Regdate=$rest['Regdate'];
             //$Email=$rest['Email']; ?>

    <table > 

<tr>
          <th>name</th>
      <th><?php echo $Name; ?></th>
  </tr>
  <tr>
       <th>DOB</th>
      <th><?php echo $DOB; ?></th>
  </tr>
  <tr>
       <th>Gender</th>
      <th><?php echo $Gender; ?></th>
  </tr>

  <tr>
  <tr>
           
           <th>Phoneno</th>
           <th><?php echo $Phoneno; ?></th>
       </tr>
       <tr>
           
           <th>Housename</th>
           <th><?php echo $Housename; ?></th>
       </tr>
      
     
  
 
   <tr>
       <th><a href="userapprove.php?id='<?php echo $rest['Userid'] ?>'">APPROVE</a></th>
       <!--th><a href="delete.php?id='<?php echo $rest['Userid'] ?>'">DELETE</a></th>-->
  </tr>  
      
     
  
        </table>
	<footer>
	
				
<?php
         }
         }
?>
