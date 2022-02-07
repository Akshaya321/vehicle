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




if (isset($_POST['submit'])) {

    
    $b = $_POST["Districtname"];
	
    $sql4="select * from district where districtname='$b'";
      $result1 = mysqli_query($con,$sql4);
    $row8 = mysqli_fetch_array($result1);
    if(count($row8)==0){
        $sql1="INSERT INTO `district`(`districtname`,`status`) VALUES ('$b',1)";
	
		
    
 echo  $sql="INSERT INTO `district`(`districtname`,`Status`) VALUES ('$b',1)";
        
      $res = mysqli_query($con, $sql);
	  $p = "select max(districtid) as logid from district";

        $q = mysqli_query($con, $p) or die(mysqli_error($con));
        $row = mysqli_fetch_array($q);
        $x = $row['logid'];




        echo '<script> alert("District Added! ")</script>';
}
else{
     echo '<script> alert("District Already Added! ")</script>';
}
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
	<body ><div style="margin-left:200px;margin-top:200px;max-width:500px;opacity:0.8;">
	
	<center><h3>Add District</h3></center>
	
	
		

		<div class="wrapper" >
			<div class="inner">
			
				<form action="#" method="post">
				<table>
				<tr><td>District Name</td>
				<td><input type="text" name="Districtname" id="Districtname" required/></td></tr>
				
				<tr><td>
				
				<center><input type="submit" name="submit" value="submit"  id="submit" required/></center>
			
				</table>
					<form>
					
			</div>
		</div>
		
	</body>
	<?php
include 'footer.php';
?><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
