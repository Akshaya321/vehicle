<?php
session_start();
$id = $_SESSION['login_id'];
include 'config.php';
CheckLogout();
include 'header.php';
?>  
<?php
include '../../dbcon.php';





if (isset($_POST['submit'])) {
   // $k = $_POST["Userid"];
    // $c = $_POST["course"];
      $e = $_POST["vacancyid"];
     $f = $_POST["Date"];
    // $j = $_FILES["certificate"]['name'];

    


    echo $sql2 = "INSERT INTO `tbl_Application`(`Userid`,`vacancyid`,`Date`, `status`) VALUES ('$id','$e','$f',1)";

    $res = mysqli_query($con, $sql2);
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
                
  <center>
			<form action="#" method="post"  style=" border:solid 2px #000;width:500px;">
		    
            <table>
				<div style="display:inline-block;vertical-align:top;width:300px;background:;">
		
					<center><h2> Apply Application</h2></center>
					<div class="form-group">
						<tr><td>Date</td>
						<input type="hidden" name="vacancyid" value="<?php if(isset($_GET['uid']))
					echo $_GET['uid'];?>">



					<td>	<input type="date"  name="Date"style="width:300px;" class="form-control"></td></tr>
						
					</div>
                    
                    <div style="margin-top:60px;margin-left:100px;width:300px;">
				<tr><td>	<input type="submit" name="submit" value="Submit" class="form-control"required/></td></tr>
					
					</div>
                    
					
					
					
					
					
					
					
					
					
				
				
                    </table>
                </form>
               
			</div>
		</div>
		
		
		
	</body>
	<?php
include 'footer.php';
?><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>