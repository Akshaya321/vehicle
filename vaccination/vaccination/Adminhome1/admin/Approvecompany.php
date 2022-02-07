<?php
session_start();
include 'config.php';
CheckLogout();

?>
<?php
include '../../dbcon.php';



//$id = $_SESSION['login_id'];
  
?>
<?php 
include 'header.php';
?>
<?php

  $qry="select * from `login` where Usertype='4' and Status='0'" ;
 $a = mysqli_query($con, $qry) or die(mysqli_error($con));
 while ($rests=mysqli_fetch_array($a)) {
      $logid=$rests['login_id'];
 $results=mysqli_query($con,"SELECT * FROM  companyreg as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid and ad.comregid='$logid'");
// print_r($results);
// return;
     //echo $results;
      //$b = mysqli_query($con, $results) or die(mysqli_error($con));
      while ($rest=mysqli_fetch_array($results)) {
         //$logid=$rests['login_id'];
        //  $qrys="select * from companyreg where comregid='$logid'";
        //  $b=mysqli_query($con, $qrys);
        //  while ($rest=mysqli_fetch_array($b)) {
             $Companyname=$rest['Companyname'];
             $Sector=$rest['Sector'];
             $Regno=$rest['Regno'];
             $Location=$rest['Location'];
             $postname=$rest['postname'];
             $talukname=$rest['talukname'];
             $districtname=$rest['districtname'];
              $Phone=$rest['Phone'];
            //  $Regdate=$rest['Regdate'];
             //$Email=$rest['Email']; ?>

	
	
    
    	
    
    <table > 
	<tr>
    <th>Companyname</th>
    <th>Company Sector</th>
    <th>Register Number</th>
    <th>Location</th>
    <th>Postoffice</th>
    <th>Taluk</th>
    <th>District</th>
	 <th>Phone</th>
	<th >Operations</th>
    
  </tr>

<tr>
          
      <td><?php echo $Companyname; ?></td>
 
 
       
      <td><?php echo $Sector; ?></td>
 
      <td><?php echo $Regno; ?></td>
  
           <td><?php echo $Location; ?></td>
       
           <td><?php echo $postname; ?></td>
       
           <td><?php echo $talukname; ?></td>
      
           <td><?php echo $districtname; ?></td>
       
           <td><?php echo $Phone; ?></td>
        
           
     
  
 
   
       <td><a href="companyaprovu.php?id='<?php echo $rest['comregid']; ?>'"><input type="submit" name="submit" value="APPROVE"></a></td>
       
  </tr>  
      
     
  
        </table>
		<?php
         }
         
?>
<?php
         }
         
?>

	<?php 
include 'footer.php';
?>
