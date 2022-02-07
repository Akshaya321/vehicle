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


    echo $sql2 = "INSERT INTO `payment`(`Userid`,`Cardno`,`Expirationdate`,`Cvvno`,`Amount`,`status`) VALUES ('$id','$e','$f','$g','$h',1)";

    $res = mysqli_query($con, $sql2);
}
?>



<!DOCTYPE html>
<html>

	</head>

	<body>
    <br><br><br><br><br><br>

		<!--<div class="background-wrap" >-->
			
				
               <!-- <img src="images\edit.jpg" alt="" style="height:600px;">-->
                
  <center>
			<form action="#" method="post"  style=" border:solid 2px #000;width:500px;height:400px;">
		    
            <table>
				
		
                    <center><h2> Payment</h2></center>
					<div class="control-group" id="addvacancy">
					
					
					
					
					<div class="form-wrapper">
                    <tr><td>Card Number</td>
					<td>
                        
                        <input type="number"  name="Cardno" class="form-control"style="width:250px;"></td></tr>
                        <tr><td>Date</td>
						<td>
                        
                        <input type="date"  name="Expirationdate" class="form-control"style="width:250px;"></td></tr>
                            <tr><td>Cvv No</td>
						<td>
                        
                        <input type="number"  name="Cvvno" class="form-control"style="width:250px;"required></td></tr>
                        <tr><td>Amount</td>
					 <td>
                        
                        <input type="Amount"  name="Amount" class="form-control"style="width:250px;"></td></tr>
						
                       
						<i class="zmdi zmdi-lock"></i>
                        <div style="margin-top:10px;margin-left:80px;width:250px;">
				<tr><td>	<center><input type="submit" name="submit" value="Apply" class="form-control"></td></tr>
					
					</div>
					
					
	</body>
	<?php
include 'footer.php';
?>  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>