<!DOCTYPE html>
<?php
include '../dbcon.php';



if (isset($_POST['submit'])) {

    
         $a = $_POST["Name"];
    
	$b = $_POST["Phoneno"];
	
	$c= $_POST["Place"];
        $d = $_POST["Vehicletype"];
    
	$e = $_POST["Vehiclename"];
	
	$f = $_POST["Vehiclenumber"];
        $g = $_POST["Vehiclemodel"];
	
	
	
	
	$v = $_POST["Email"];
	$r= $_POST["Password"];
    $s= $_POST["Confirmpassword"];
	if($r==$s){
		
    $sqls="SELECT * FROM `usertype` WHERE `Usertype`='user'";
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
 $sql2="INSERT INTO `userrregistration`(`Userid`,`Name`,`Phoneno`,`Place`,`Vehicletype`,`Vehiclename`,`Vehiclenumber`, `Vehiclemodel`,  `status`) VALUES 
 ('$l','$a','$b','$c','$d','$e','$f','$g',1)";
   $sql2;    
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
				
					<img src="images\banner.jpeg" alt="" style="height:800px;">
				</div>
				<!--<form action="#" method="post">-->
				<form action="#" method="post" enctype="multipart/form-data" class="oh-autoval" style="border:solid 2px #000;width:400px;">
				
					<h3>User Registration</h3>
					<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Name</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="text" name="Name"style="width:330px;" class="av-username">
                                            </div>
					
					
					
					
					
											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Phone Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="number" name="Phoneno"style="width:330px;"class="av-mobile">
											</div>
											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Place</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="text" name="Place"style="width:330px;"required/>
											</div>
											
<div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Vehicle Type</label>
					<!--<label>Company Type</label>-->
					<select style="width:330px;" name="Vehicletype" required/>
				       <option>-select-</option>
					<option>Two Wheeler</option>
					<option>Four Wheeler</option>
					
					</select></div>
<div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Vehicle Name</label>
					<!--<label>Company Name</label>-->
					<select style="width:330px;" name="Vehiclename" required/>
				       <option>-select-</option>
					<option>bicycle</option>
					<option>car</option>
					
					</select></div>
<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Vehicle Number</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="number" name="Vehiclenumber"style="width:330px;"class="av-mobile">
											</div>
<div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Vehicle Model</label>
					<!--<label>Company Name</label>-->
					<select style="width:330px;" name="Vehiclemodel" required/>
				       <option>-select-</option>
					<option>Bajaj Pulsur</option>
					<option>swift</option>
					
					</select></div>
											
											
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
											<div style="margin-top:70px;margin-left:100px;width:100px;">
											
					<input type="submit" name="submit" value="Register" class="form-control"required/>
					
					</div>
					<p>Already have an Account?<a href="../LOGIN/login.html">SIGN IN</a></p>
					
					</div>
				</form>
				
			</div><br/>
		</div>
		
		
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>