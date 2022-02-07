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
$id=$_POST['id'];
 $a = $_POST["Name"];
    
	$b = $_POST["Phoneno"];
	
	$c= $_POST["Place"];
        $d = $_POST["Vehicletype"];
    
	$e = $_POST["Vehiclename"];
	
	$f = $_POST["Vehiclenumber"];
        $g = $_POST["Vehiclemodel"];
	
	

 //$j=$_POST["panchayath"];
 //$e=$_POST["mobile"];
//  $photo="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
//  move_uploaded_file($_FILES['photo']['tm_name'],$photo);


 echo $update="update `userrregistration` set `Name`='$a',`Phoneno`='$b',`Place`='$c',`Vehicletype`='$d',`Vehiclename`='$e',`Vehiclenumber`='$f',`Vehiclemodel`='$g', where Userid=$id";
$res=mysqli_query($con,$update);
if($res){
	?>
	<script>
	window.location.href='viewuserdetails.php';
	</script>
<?php
}


}

?>

   
            
               <table class="table">
              
                               
                                        
                              <?php
			 $logid=$_GET['id'];
         
             $qry="select * from userrregistration where Userid=$logid";
                  $a = mysqli_query($con, $qry);
                  $rest=mysqli_fetch_array($a);
                 $Name=$rest['Name'];
      
    
      $Phoneno=$rest['Phoneno'];
      $Place=$rest['Place'];
       $Vehicletype = $rest['Vehicletype'];
    
	$Vehiclename = $rest['Vehiclename'];
	
	$Vehiclenumber = $rest['Vehiclenumber'];
        $Vehiclemodel = $rest['Vehiclemodel'];
   
                   
                  
                 
                  
                 
         
                ?>
               
           
                  <form  method="post" style="margin-left:300px;" enctype="multipart/form-data"  action=""><br>

                <table class="table">
				
           <tr><td><input type="hidden" value="<?php echo $rest['Userid'];?>" name="id"></label></td></tr>                                      
           <tr><td><label for="item">Name</label></td>
           <td><input type="text" id="item" name="Name"  value="<?php echo $rest['Name'];?>"   style="height:25px;" /><br /> </td></tr>
         
           <tr><td><label for="item">Phoneno</label></td>
         <td><input type="text" id="item" name="Phoneno"  value="<?php echo $rest['Phoneno'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Place</label></td>
         <td><input type="text" id="item" name="Place"  value="<?php echo $rest['Place'];?>"   style="height:25px;" /><br /> </td></tr>
      
         <tr><td><label for="item">Vehicletype</label></td>
         <td><input type="text" id="item" name="Vehicletype"  value="<?php echo $rest['Vehicletype'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Vehicle Name</label></td>
         <td><input type="text" id="item" name="Vehiclename"  value="<?php echo $rest['Vehiclename'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Vehiclenumber</label></td>
         <td><input type="text" id="item" name="Vehiclenumber"  value="<?php echo $rest['Vehiclenumber'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Vehiclemodel</label></td>
         <td><input type="text" id="item" name="Vehiclemodel"  value="<?php echo $rest['Vehiclemodel'];?>"   style="height:25px;" /><br /> </td></tr>
        
      
                                     
  
                                     
        
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
