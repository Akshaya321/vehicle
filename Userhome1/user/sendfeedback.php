

<?php
session_start();
include 'config.php';
CheckLogout();
include '../../dbcon.php';




if (isset($_POST['submit'])) {

    
    $a = $_POST["Name"];
   
    $c = $_POST["Text"];

   
	
    $id = $_SESSION['login_id'];
		
    
   $sql="INSERT INTO `feedback`(`Fid`,`Name`,`Text`,
  `Status`) VALUES ('$id','$a','$c',1)";
        
      $res = mysqli_query($con, $sql);
     
}

?>
<?php
include 'header.php';
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

	<body style="background-repeat:no-repeat;>
    <br><br><br>

		<!--<div class="background-wrap" >-->
			<div class="inner">
            <div class="image-holder">
        <div class="item active" style="background-image: url(images/im2.jpg);">
				
               <!-- <img src="images\edit.jpg" alt="" style="height:600px;">-->
                
  <center>
			<form action="#" method="post"  style=" border:solid 2px #000;width:600px;" >
		    
            <table>
				<div style="display:inline-block;vertical-align:top;width:600px;background:;">
		
                    <center><h2>Send Feedback</h2></center>
					<div class="control-group" id="addvacancy">
					<div class="form-group">
                        <tr><td> Name</td>
					<td>	<input type="text"  name="Name"style="width:250px;" class="form-control"required/></td></tr>
						
					</div>
					
					
					
					
                    <div class="form-wrapper">
                    <tr><td>Text</td>
					<td>
                        
						<input type="textarea"  name="Text" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                    </div>
                    
					<div style="margin-top:10px;margin-left:80px;width:250px;">
				<tr><td>	<input type="submit" name="submit" value="Send Feedback" class="form-control"></td></tr>
					
					</div>
					
	</body>
	<?php
include 'footer.php';
?><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>