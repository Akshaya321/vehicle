<!DOCTYPE html>
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

    
         $e = $_POST["Cardno"];
    $f= $_POST["Expirationdate"];
 $g= $_POST["Cvvno"];
     $h = $_POST["Amount"];
 

    $id = $_SESSION['login_id'];

  $sql2 = "INSERT INTO `tbl_payment`(`Userid`,`Cardno`,`Expirationdate`,`Cvvno`,`Amount`,`status`) VALUES ('$id','$e','$f','$g','$h',1)";
  echo $sql2;    
      $res = mysqli_query($con, $sql2);

}

	


?>





<!DOCTYPE html>
<html>

	<head>
		
	</head>

	<body >

		<!--<div class="background-wrap" >-->
			
			
				
					
				</div>
				<!--<form action="#" method="post">-->
<center>
				<form action="#" method="post" enctype="multipart/form-data" class="oh-autoval" style="border:solid 3px #000;width:500px;">
				
					<h3>Payment</h3>
					<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Card No</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="number" name="Cardno"style="width:330px;" ">
                                            </div>
					
					
					
					
					
											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Expiration date</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="date" name="Expirationdate"style="width:330px;">
											</div>
											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Cvvno</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="number" name="Cvvno"style="width:330px;"required/>
											</div>

											<div class="col-sm-3 col-md-2 col-5">
                                               <label style="font-weight:bold;">Amount</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <input  type="number" name="Amount"style="width:330px;"required/>
											</div>
											

											<div style="margin-top:60px;margin-left:100px;width:100px;">
											
					<input type="submit" name="submit" value="Make Payment" class="form-control"required/>
					
					
				</form>
				
			</div><br/>
		</div>
		
		
		
	</body>
	<?php
include 'footer.php';
?><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>