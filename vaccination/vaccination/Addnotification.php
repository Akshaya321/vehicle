<?php
include '../dbcon.php';




if (isset($_POST['submit'])) {

    
     
    $a = $_POST["Title"];
    $b = $_POST["Description"];
    $c = $_POST["Date"];
	$touserid = $_POST["touserid"];
	$user= $_POST["user"];
	
	
    
 echo  $sql="INSERT INTO `tbl_notification`(not_to,not_from,`Title`,`Description`,`Date`,`Status`) 
 VALUES ('$touserid','$user','$a','$b','$c',1)";
        
      $res = mysqli_query($con, $sql);
      
     
     

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
	</head>

	<body ><!--style="background-image: url(../images/slider/bg1.jpg);background-repeat:no-repeat;">-->

		<!--<div class="background-wrap" >-->
			<div class="inner">
            <div class="item active" style="background-image: url(images/im3.jpg);">
                
  
			<form action="#" method="post"  style=" border:solid 2px #000;width:500px;">
		    
            <table>
				<div style="display:inline-block;vertical-align:top;width:300px;background:;">
		
					<center><h2>Add Notification</h2></center>
					<div class="form-group">
                        <tr><td>Title</td>
					<td>	<input type="text"  name="Title"style="width:300px;" class="form-control"></td></tr>
						
					</div>
                    <div class="form-group">
                        <tr><td>Description </td>
					<td>	<input type="text"  name="Description"style="width:300px;" class="form-control"></td></tr>
						
					</div>
					
					<input type="text" name="touserid" value="<?php if(isset($_GET['uid'] ))
					echo $_GET['uid'];?>">


					<div class="form-group">
                        <tr><td>Date</td>
					<td>	<input type="date"  name="Date"style="width:300px;" class="form-control"></td></tr>
						
					</div>
                    
					
					
                    <div style="margin-top:60px;margin-left:100px;width:300px;">
				<tr><td>	<input type="submit" name="submit" value="ADD" class="form-control"required/></td></tr>
					
					</div>
                    
					
					
					
					
					
					
					
					
					
				
				
                    </table>
                </form>
               
			</div>
		</div>
		
		
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>