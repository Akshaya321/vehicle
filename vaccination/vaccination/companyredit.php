<?php
// including the database connection file
include '../dbcon.php';



$kid=$_GET["uid"];
if(isset($_POST["submit"]))
{


$b = $_POST["Companyname"];
$d = $_POST["Sector"];
$e = $_POST["Regno"];
$c = $_POST["Location"];
// $f = $_POST["postname"];
// $h = $_POST["talukname"];
// $i = $_POST["districtname"];
$g = $_POST["Phone"];
echo $k="UPDATE `companyreg` SET `Companyname`='$b',`Sector`='$d',`Regno`='$e',`Location`='$c',`Phone`='$g', WHERE `comregid`='$kid'";    
mysqli_query($con,$k);
//header("Location:viewcompanydetails.php");
}
//$result = mysqli_query($con,"SELECT * FROM `companyreg` as c,postoffice as p,taluk as t,district as d where c.comregid='$kid' and c.postid = p.postid and p.talukid=t.talukid and t.districtid=d.districtid"); 
//$res=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head>
	<!--<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-c.ster/css/oh-autoval-style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </sc.
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>-->
	<meta charset="utf-8">
	<title>RegistrationForm_v1 by Colorlib</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<div class="wrapper">
		<div class="inner">


			<!--<img src="images\neww.jpg" alt="" style="height:600px;">-->


			<form action="#" method="post" style=" border:solid 2px #000;width:400px;">
				<!--<div class="item active" style="background-image: url(images/im.jpg)">-->
				<div style="display:inline-block;vertical-align:top;">


					<h3>Edit Details</h3>

					<div class="row">
						<div class="col-sm-3 col-md-2 col-5">
							<label style="font-weight:bold;">Company Name</label>
						</div>
						<div class="col-md-8 col-6">
							<input type="text" name="Companyname" style="width:330px;"
								value="<?php echo $b["Companyname"];?>" class="av-name">
						</div>
						<br />
						<div class="row">
							<div class="col-sm-3 col-md-2 col-5">
								<label style="font-weight:bold;">Company Sector</label>
							</div>
							<div class="col-md-8 col-6">
								<input type="text" name="Sector" style="width:330px;"
									value="<?php echo $res["Sector"];?>" class="av-name">
							</div>
							<br />
							<div class="row">
								<div class="col-sm-3 col-md-2 col-5">
									<label style="font-weight:bold;">Register Number</label>
								</div>
								<div class="col-md-8 col-6">
									<input type="text" name="Regno" style="width:330px;"
										value="<?php echo $res["Regno"];?>" class="av-name">
								</div>
								<br />
								<div class="row">
									<div class="col-sm-3 col-md-2 col-5">
										<label style="font-weight:bold;">Location</label>
									</div>
									<div class="col-md-8 col-6">
										<input type="text" name="Location" style="width:330px;"
											value="<?php echo $res["Location"];?>" class="av-name">
									</div>
									
									
									
											<br />
											<div class="row">
												<div class="col-sm-3 col-md-2 col-5">
													<label style="font-weight:bold;">Phone</label>
												</div>
												<div class="col-md-8 col-6">
													<input type="text" name="Phone" style="width:330px;"
														value="<?php echo $res["Phone"];?>" class="av-name">
												</div>
												<br />
												<div style="margin-top:100px;margin-left:100px;width:100px;">
													<input type="submit" name="submit" value="EDIT" class="form-control"
														required />
												</div>
											</div>

			</form>
		</div>
	</div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>