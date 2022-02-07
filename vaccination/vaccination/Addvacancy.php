

<?php

include '../dbcon.php';




if (isset($_POST['submit'])) {

    // $l = $_POST["comregid"];
    $a = $_POST["Positionname"];
    $b = $_POST["Experience"];
    $c = $_POST["Jobdescription"];

    $e = $_POST["Joblocation"];
   
    $g = $_POST["Venue"];
	$h = $_POST["Date"];
    $z= $_POST["Qualification"];

	
    $id = $_SESSION['login_id'];
		
    
  echo $sql="INSERT INTO `addvacancy`(`comregid`,`Positionname`,`Experience`,`Jobdescription`,
  `Joblocation`,`Venue`,`Date`,`Qualification`,`Status`) VALUES ('$id','$a','$b','$c','$e','$g','$h','$z',1)";
        
      $res = mysqli_query($con, $sql);
     
}

?>
<?php
include 'companyhome/companyheader.php';
//include_once ('companyhome/companyheader.php');
?>


<!DOCTYPE html>
<html>
<!--<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>-->
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body style="background-repeat:no-repeat;">
    <br><br><br><br><br><br>

		<!--<div class="background-wrap" >-->
			<div class="inner">
            <div class="image-holder">
        <div class="item active" style="background-image: url(images/im2.jpg);">
				
               <!-- <img src="images\edit.jpg" alt="" style="height:600px;">-->
                
  
			<form action="#" method="post"  style=" border:solid 2px #000;width:400px;">
		    
            <table>
				<div style="display:inline-block;vertical-align:top;width:300px;background:;">
		
                    <center><h2>Add Vacancy Details</h2></center>
					<div class="control-group" id="addvacancy">
					<div class="form-group">
                        <tr><td>Position Name</td>
					<td>	<input type="text"  name="Positionname"style="width:250px;" class="form-control"required/></td></tr>
						
					</div>
					
					
					
					<div class="form-wrapper">
                    <tr><td>Experience</td>
					<td>
                        
						<input type="text"  name="Experience" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                    <tr><td>Job Description</td>
					<td>
                        
						<input type="text"  name="Jobdescription" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                    <tr><td>Job location</td>
					<td>
                        
						<input type="text"  name="Joblocation" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                    <tr><td>Venue</td>
					<td>
                        
						<input type="text"  name="Venue" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                    <tr><td>Date</td>
					<td>
                        
						<input type="date"  name="Date" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    <div class="form-wrapper">
                    <tr><td>Qualification</td>
					<td>
                    <input type="checkbox" name="Qualification" value="MCA"> MCA<br>
                    <input type="checkbox" name="Qualification" value="MBA"> MBA<br>
                    <input type="checkbox" name="Qualification" value="MCOM" checked>MCOM<br></td></tr>
                    
					
					<div style="margin-top:10px;margin-left:80px;width:250px;">
				<tr><td>	<input type="submit" name="submit" value="ADD" class="form-control"></td></tr>
					
					</div>
					
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>