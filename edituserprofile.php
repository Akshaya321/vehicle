<?php
include '../dbcon.php';
//if(!$_SESSION['loginid'])
//{
//	header('location:index.php');
//}

?>

<?php

if(isset($_POST['submit']))
{
$id=$_POST['id'];
$b = $_POST["Companyname"];
$d = $_POST["Sector"];
$e = $_POST["Regno"];
$c = $_POST["Location"];
// $f = $_POST["postname"];
// $h = $_POST["talukname"];
// $i = $_POST["districtname"];
$g = $_POST["Phone"];

 //$j=$_POST["panchayath"];
 //$e=$_POST["mobile"];
//  $photo="photo/".time()."".htmlspecialchars($_FILES['photo']['name']);
//  move_uploaded_file($_FILES['photo']['tm_name'],$photo);


 echo $update="update `companyreg` set `Companyame`='$b',`Sector`='$d',`Regno`='$e',`Location`='$c',`Phone`='$g' where comregid=$id";
$res=mysqli_query($con,$update);

// header("location:viewuserdetails.php");
////$update2="update `district` set `district`='$i' where districtid='$districtid'";
//$res=mysqli_query($con,$update2);
}

?>

   
            
               <table class="table">
              
                               
<!--                                         
                               <?php
			 $logid=$_GET['id'];
         
             $qry="select * from userrregistration where Userid=$logid";
                  $a = mysqli_query($con, $qry);
                  $rest=mysqli_fetch_array($a);
                  $Name=$rest['Name'];
                   $DOB=$rest['DOB'];
                   $Gender=$rest['Gender'];
                   $Photo=$rest['Photo'];          
                   $Phoneno=$rest['Phoneno'];
                
                   
                  
                 
                  
                 
         
                ?>  -->
               
           
                  <form  method="post" style="margin-left:300px;" enctype="multipart/form-data"  action=""><br>
                <table class="table">
				
           <!-- <tr><td><input type="hidden" value="<?php echo $rest['Userid'];?>" name="id"></label></td></tr>                                       -->
           <tr><td><label for="item">Companyname</label></td>
           <td><input type="text" id="item" name="Companyname"  value="<?php echo $rest['Companyname'];?>"   style="height:25px;" /><br /> </td></tr>
         
           <tr><td><label for="item">Sector</label></td>
         <td><input type="text" id="item" name="Sector"  value="<?php echo $rest['Sector'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Regno</label></td>
         <td><input type="text" id="item" name="Regno"  value="<?php echo $rest['Regno'];?>"   style="height:25px;" /><br /> </td></tr>
      
         <tr><td><label for="item">Location</label></td>
         <!--<td><input type="text" id="item" name="Photo"  value="<?php echo $rest['Photo'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Photo</label></td>-->
         <td><input type="text" id="item" name="Location"  value="<?php echo $rest['Location'];?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Phone</label></td>
         <td><input type="text" id="item" name="Phone"  value="<?php echo $rest['Phone'];?>"   style="height:25px;" /><br /> </td></tr>
         
                                     
  
                                     
        
        <center>
            <tr><td><input type="submit" style="background-color:yellowgreen;color:#FFFFFF;width: 100px;height:30px;" name="submit" value="Update" onClick="return valid()"></td></tr>
                                    </center>
           </table>
                                                    </form>
                           </div>                 
            
                                        
    </center>
        
    </body>
</html> 
