<?php
include '../../dbcon.php';
//if(!$_SESSION['loginid'])
//{
//	header('location:index.php');
//}

?>
<?php
include 'header1.php';
?>
<?php

if(isset($_POST['submit']))
{

 $a = $_POST["Name"];
    
	$b = $_POST["Address"];
	
	$c= $_POST["Place"];
        $d = $_POST["Phone"];
    
	
	

 //$j=$_POST["panchayath"];
 //$e=$_POST["mobile"];
//  $photo="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
//  move_uploaded_file($_FILES['photo']['tm_name'],$photo);


 echo $update="update `mechanic` set `Name`='$a',`Address`='$b',`Place`='$c',`Phone`='$d', where mechid=$id";
$res=mysqli_query($con,$update);
if($res){
	?>
	<script>
	window.location.href='viewmech.php';
	</script>
<?php
}


}

?>

   
            
               <table class="table">
              
                               
                                        
                              <?php
			 $logid=$_GET['id'];
         
             $qry="select * from mechanic where mechid=$logid";
                  $a = mysqli_query($con, $qry);
                  $rest=mysqli_fetch_array($a);
                 $Name=$rest['Name'];
      
    $Address$rest['Address'];
      
      
      $Place=$rest['Place'];
       $Phone = $rest['Phone'];
    
	
   
                   
                  
                 
                  
                 
         
                ?>
               
           
                  <form  method="post" style="margin-left:300px;" enctype="multipart/form-data"  action=""><br>

                <table class="table">
				
           <tr><td><input type="hidden" value="<?php echo $rest['mechid'];?>" name="id"></label></td></tr>                                      
           <tr><td><label for="item">Name</label></td>
           <td><input type="text" id="item" name="Name"  value="<?php echo $rest['Name'];?>"   style="height:25px;" /><br /> </td></tr>
         
           <tr><td><label for="item">Address</label></td>
         <td><input type="text" id="item" name="Address"  value="<?php echo $rest['Address'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Place</label></td>
         <td><input type="text" id="item" name="Place"  value="<?php echo $rest['Place'];?>"   style="height:25px;" /><br /> </td></tr>
      
         <tr><td><label for="item">Phone</label></td>
         <td><input type="number" id="item" name="Phone"  value="<?php echo $rest['Phone'];?>"   style="height:25px;" /><br /> </td></tr>
                            
  
                                     
        
        <center>
            <tr><td><input type="submit" style="background-color:yellowgreen;color:#FFFFFF;width: 100px;height:30px;" name="submit" value="Update" onClick="return valid()"></td></tr>
                                    </center>
           </table>
                                                    </form>
                           </div>                 
            
                                        
    </center>
        
    </body>
	<?php
	include 'footer.php';
	?>
</html> 
