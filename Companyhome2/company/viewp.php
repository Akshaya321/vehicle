<?php
include '../../dbcon.php';
// $results=mysqli_query($con,"SELECT * FROM  companyreg as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid ");
session_start();
include 'config.php';
CheckLogout();

 $id = $_SESSION['login_id'];
  
?>
<?php
include 'header1.php';
?>
<?php

 $qry="select * from `companyreg` where comregid='$id'";
 
//echo $qry;

      $a = mysqli_query($con, $qry) or die(mysqli_error($con));
     while( $rest=mysqli_fetch_array($a))
     {
     $Name=$rest['Name'];
      $Address = $rest['Address'];
    
      $Phone=$rest['Phone'];
    
         $Place=$rest['Place'];
   
    


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
        <th><center>Address</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Address'] ?>"></center></th>
  </tr>
<tr>
        <th><center>Place</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Place'] ?>"></center></th>
  </tr>
  <tr>
  <tr>
           
           <th><center>Phone No:</center></th>
           <th><center><input type="text" disabled value="<?php echo $rest['Phone'] ?>"></center></th>
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
	