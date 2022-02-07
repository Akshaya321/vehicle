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
$a=$_POST["Name"];
 $b=$_POST["DOB"];
 $c=$_POST["Gender"];

  
 $i=$_POST["Phoneno"];

 //$j=$_POST["panchayath"];
 //$e=$_POST["mobile"];
//  $photo="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
//  move_uploaded_file($_FILES['photo']['tm_name'],$photo);


 echo $update="update `userrregistration` set `Name`='$a',`DOB`='$b',`Gender`='$c',`Phoneno`='$i', where Userid=$id";
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
                   $DOB=$rest['DOB'];
                   $Gender=$rest['Gender'];
                           
                   $Phoneno=$rest['Phoneno'];
                 // $panchayathid=$rest['panchayathid'];
                 
                   
                  
                 
                  
                 
         
                ?>
               
           
                  <form  method="post" style="margin-left:300px;" enctype="multipart/form-data"  action=""><br>

                <table class="table">
				
           <tr><td><input type="hidden" value="<?php echo $rest['Userid'];?>" name="id"></label></td></tr>                                      
           <tr><td><label for="item">Name</label></td>
           <td><input type="text" id="item" name="Name"  value="<?php echo $rest['Name'];?>"   style="height:25px;" /><br /> </td></tr>
         
           <tr><td><label for="item">DOB</label></td>
         <td><input type="text" id="item" name="DOB"  value="<?php echo $rest['DOB'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Gender</label></td>
         <td><input type="text" id="item" name="Gender"  value="<?php echo $rest['Gender'];?>"   style="height:25px;" /><br /> </td></tr>
      
         <tr><td><label for="item">Phone number</label></td>
         <!--<td><input type="text" id="item" name="Photo"  value="<?php echo $rest['Photo'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Photo</label></td>-->
         <td><input type="text" id="item" name="Phoneno"  value="<?php echo $rest['Phoneno'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Place</label></td>
         <td><input type="text" id="item" name="Place"  value="<?php echo $rest['Place'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">House Name</label></td>
         <td><input type="text" id="item" name="Housename"  value="<?php echo $rest['Housename'];?>"   style="height:25px;" /><br /> </td></tr>
        
      
                                     
  
                                     
        
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
