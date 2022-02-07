<?php
session_start();
include 'config.php';
CheckLogout();
?>
<?php
include 'header.php';
?> 
<?php


	include '../../dbcon.php';

//session_start();

     // if(!isset($_SESSION['loginid']))
    // {
       // header("Location: login.php");  
   
      //}

if (isset($_POST['signup'])) {
    
    $talukname = $_POST['talukname'];
    $district_select = $_POST['districtname'];


    
   
 $sql4="select * from taluk where talukname='$talukname'";
      $result1 = mysqli_query($con,$sql4);
    $row8 = mysqli_fetch_array($result1);
    // if(count($row8)==0){
      
        $sql1="INSERT INTO `taluk`(`talukname`,`districtid`,`status`) VALUES ('$talukname','$district_select',1)";
        
        $res = mysqli_query($con, $sql1)or die(mysqli_error($con));


        $p = "select max(talukid) as logid from taluk";

        $q = mysqli_query($con, $p) or die(mysqli_error($con));
        $row = mysqli_fetch_array($q);
        $x = $row['logid'];




         '<script> alert("Taluk Added! ")</script>';


        }
else{
     echo '<script> alert("Taluk Already Added! ")</script>';
}
        
    

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
		<style>
		
		</style>
	</head>
	<body >
	<div style="margin-left:280px;margin-top:100px;max-width:900px;background-color:black; opacity:0.8;">
    
       <center><font face="Arial" size="5" style="margin-left:-55px; color:whitesmoke"><b>ADD TALUK</b></font></center><br>
      

<form name="form1" class="form-horizontal" method="post" action="" onsubmit="return">
   
		

		<div class="form-group">
    <label class="col-md-4 control-label" for="street" style="color:black; margin-left:350px; color:whitesmoke;">District</label>  
    <div class="col-md-4" style="margin-left:350px; margin-top:10px;">
                 
                        <select class="form-control" name="districtname" id="district_select">
                        <option value="-1">select</option> 
                     <?php
            $q = mysqli_query($con, "SELECT districtid,districtname FROM district where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['districtid'] . '>' . $row['districtname'] . '</option>';
            }
            ?></select>

            </div>
        </div>
    <div class="form-group"style=" margin-top:10px;">
            <label class="col-md-4 control-label" for="name" style="color:black; margin-left:350px; color:whitesmoke">Taluk</label>  
            <div class="col-md-4"style="margin-top:10px;">
                <input id="talukname" name="talukname" type="text" placeholder="Enter Taluk Name" style="margin-left:350px;" class="form-control input-md" required onChange="return fName()">
<input type="submit" name="signup" value="ADD" id="signup" style="margin-left:380px;margin-top:50px;" class="button button1">
            </div>
    </div><br>
       
</form>
                                            
      
		
	</body>
	<?php
include 'footer.php';
?><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>




     
