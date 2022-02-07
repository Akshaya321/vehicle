<?php
include '../../dbcon.php';
// $results=mysqli_query($con,"SELECT * FROM  userreg as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid ");
session_start();
include 'config.php';
CheckLogout();

 $id = $_SESSION['login_id'];
  
?>
<?php
include 'header1.php';
?>
<?php

 $qry="select * from `userrregistration` where Userid='$id'";
 
//echo $qry;

      $a = mysqli_query($con, $qry) or die(mysqli_error($con));
     while( $rest=mysqli_fetch_array($a))
     {
     $Name=$rest['Name'];
      
    
      $DOB=$rest['DOB'];
      $Gender=$rest['Gender'];
       $Phoneno = $rest['Phoneno'];
    
	$Place = $rest['Place'];
	
	$Housename = $rest['Housename'];
        $Vacctype = $rest['Vacctype'];
   
    


?>
  <style>
.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #000000;
  background-color: #CCCCCC;
  border: 1px solid #000000;
  border-radius: 10px;
 
}

.button:hover {background-color:#FF3333; color:white;}

.button:active {
  background-color: #FF3333;
  
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<form action="#" method="post" style="margin-top:100px;">
<center> 
<table>
      
<tr>
           
           <th></th>
          
           
       </tr>
<div>
<tr>
<th><center>Name</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Name'] ?>"></center></th>
    </tr>
</div>
  
  

  <tr>
  <tr>
           
           <th><center>DOB:</center></th>
           <th><center><input type="text" disabled value="<?php echo $rest['DOB'] ?>"></center></th>
       </tr>
       <tr>
        <th><center>Gender</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Gender'] ?>"></center></th>
  </tr>
   <tr>
       <th><center>Phoneno</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Phoneno'] ?>"></center></th>
  </tr>
  
  <tr>
       <th><center>Place</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Place'] ?>"></center></th>
  </tr> 
   <tr>
       <th><center>Housename</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Housename'] ?>"></center></th>
  </tr> 
 
   <tr>
       <th><center>Vaccination type</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Vacctype'] ?>"></center></th>
  </tr> 

  
  
 
  
  

  </table>
        <br>
        <br>    
  <a href="edituserprofile.php?id=<?php echo $rest[0]?>"><center>EDIT</a>
            </center>
</form>
       
        <?php
     }
     ?>
	
	<?php
	include 'footer.php';
	?>
	