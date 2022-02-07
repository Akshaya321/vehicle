 <!DOCTYPE html>
<?php
include 'dbcon.php';



if (isset($_POST['submit'])) {

    
    $a = $_POST["Name"];
    $b = $_POST["Address"];
    $c = $_POST["post"];
	$d = $_POST["Phone"];
	$v = $_POST["Email"];
	$r= $_POST["Password"];
    $s= $_POST["Confirmpassword"];
	if($r==$s){
		
    $sqls="SELECT * FROM `usertype` WHERE `Usertype`='health'";
	$results=mysqli_query($con,$sqls);
	$rows=mysqli_fetch_array($results);
	$uid=$rows['Usertypeid'];
   $sql1="INSERT INTO `login`(`Email`,`Password`,`Usertype`,`status`) VALUES ('$v','$r','$uid',1)";
$result1=mysqli_query($con,$sql1);
	 $lid=mysqli_insert_id($con);
	 //$logid=mysqli_insert_id($con);
	
$logid="SELECT `login_id` FROM `login` WHERE `Email`='$v'";
$result2=mysqli_query($con,$logid);
if($row=mysqli_fetch_array($result2))
{

  $l=$row["login_id"];
 $sql2="INSERT INTO `companyreg`(`comregid`,`Name`,`Address`,`postid`,`Phone`, `status`) VALUES 
 ('$l','$a','$b','$c','$d',1)";
  echo $sql2;    
      $res = mysqli_query($con, $sql2);

}

	}
if($res==1)
{
	echo"<script>alert('Registration Successful Please Login');</script>";
       
}
else
{
	echo"<script>alert('Sorry email or username is already in use..Please choose a different one..! ');</script>)";
}

//}else {

       // echo '<script language="javascript">';
        //echo 'alert("Your password does not match")';
        //echo '</script>';
}


?>





<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="jsval/oh-autoval-style.css">
        <script src="jsval/jquery.min.js"> </script>
        <script src="jsval/oh-autoval-script.js"></script>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body >

		<!--<div class="background-wrap" >-->
			<div class="inner">
			<div class="image-holder">
				
					
				</div>
<img src="images\banner.jpeg" alt="" style="height:800px;">
				<!--<form action="#" method="post">-->
<center>
				<form action="#" method="post" enctype="multipart/form-data" class="oh-autoval" style="border:solid 2px #000;width:400px;">
				
					<h3>Mechanic Registration</h3>
					<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;"> Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="text" name="Name"style="width:330px;" class="av-username" av-message="wrong">
                                            </div>
                                      <div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;"> Address</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="text" name="Address"style="width:330px;" class="av-username" av-message="wrong">
                                            </div>
					
					
					
					
											 
					
					
					<div class="control-group">
                
							<tr><td>		<label class="control-label"><b>District:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                       <td>     <select  name="district" id="district"style="width:330px;" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT districtid,districtname FROM district where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['districtid'] . '>' . $row['districtname'] . '</option>';
            }
            ?>
              </select></td></tr>
									</div>
								</div>
                                          
                                                            <div class="control-group">
								<tr><td>	<label class="control-label"><b>Taluk:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                  <td>  <select name="taluk" id="taluk" style="width:330px;" required/><option value="-1">select</option></select></td></tr>
									</div> 
<div class="control-group">
									<tr><td><label class="control-label"><b>Postoffice:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                   <td><select name="post" id="post"style="width:330px;" required/><option value="-1">select</option></select></td></tr>
									</div>
								</div>									
								
					
					
					<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Phone Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">

                                                <input  type="text" name="Phone"style="width:330px;" max="1999-12-31" required/>
                                            </div>
					
					
					
					
					
									<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="email" name="Email"style="width:330px;"class="av-email">
											</div>
											
											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="password" name="Password"style="width:330px;"class="av-password">
											</div>
											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Confirm Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="password" name="Confirmpassword"style="width:330px;"required/>
											 </div>
					
					
					<div style="margin-top:60px;margin-left:100px;width:180px;">
					<input type="submit" name="submit" value="Register" class="form-control">
					
					</div>
					
					</table>
				
					<div>
					<p>Already have an Account?<a href="LOGIN/login.html">SIGN IN</a></p>
					
					</div>
                </form>
               <script src="../asset/js/jquery-3.3.1.min.js"></script>
		 <script>
			$(document).ready(function() {

                            $("#district").on("change", function(){
                                 $district = $('#district').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$district},
                                     url:'gettaluk.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT TALUK--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#taluk").html($html);
                                     }
                                 });
                            });
                            
							 $("#taluk").on("change", function(){
                                 $taluk = $('#taluk').val();
                                 //alert($taluk);
                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$taluk},
                                     url:'getpostoffice.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         
                                         
                                         $html = '<option value="">--SELECT POSTOFFICE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#post").html($html);
                                     }
                                 });
                            });
                            
                          
                            
			});
                              
                        
                        
		</script>
		
							
											<!-- <div style="margin-top:70px;margin-left:100px;width:100px;">
											
					<input type="submit" name="submit" value="Register"window.location='Adduserprofile.php'; class="form-control"required/>
					 --> 
					
				<!-- </form>
				
			</div><br/>
		</div> -->
		
		
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>