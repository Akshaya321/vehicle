<?php
include '../dbcon.php';




if (isset($_POST['submit'])) {

    
    $a = $_POST["Place"];
    $b = $_POST["post"];
    $c = $_POST["Phoneno"];
	//$d = $_POST["Maritalstatus"];
    $e = $_POST["Disability"];
    //$f = $_POST["Disabilitydescription"];
    $g = $_POST["Housename"];
	$h = $_POST["Accno"];
    $i = $_POST["IDProof"];
    //$m = $_POST["Photo"];
    //$j = $_POST["Certificate"];
	$k  = $_POST["Regdate"];
	$l = $_POST["Caste"];
	
		
    
  echo $sql="INSERT INTO `adduserprofile`(`Place`,`postid`,`Phoneno`,`disid`,`Housename`,`Accno`,`IDProof`,`Regdate`,`Caste`,`Status`) VALUES ('$a','$b','$c','$e','$g','$h','$i','$k','$l',1)";
        
      $res = mysqli_query($con, $sql);
      
      if($res=1)
      {
          echo"<script>alert('Registration Successful Please Login');window.location='LOGIN/login.html';</script>";
             
      } 
     

}

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
    

		<!--<div class="background-wrap" >-->
			<div class="inner">
            <div class="image-holder">
        <div class="item active" style="background-image: url(images/im2.jpg);">
				
               <!-- <img src="images\edit.jpg" alt="" style="height:600px;">-->
                
  
			<form action="#" method="post"  style=" border:solid 2px #000;width:400px;">
		    
            <table>
				<div style="display:inline-block;vertical-align:top;width:300px;background:;">
		
					<center><h2>Add Profile Details</h2></center>
					<div class="form-group">
                        <tr><td>Place</td>
					<td>	<input type="text"  name="Place"style="width:250px;" class="form-control"required/></td></tr>
						
					</div>
					
					
					<div class="control-group">
                
							<tr><td>		<label class="control-label"><b>District:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                       <td>     <select  name="district" id="district"style="width:250px;" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT districtid,districtname FROM district where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['districtid'] . '>' . $row['districtname'] . '</option>';
            }
            ?>
              </select></td></tr>
									</div>
								</div>
                                          
                                                            <div class="control-group">
								<tr><td>	<label class="control-label"><b>Taluk:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                  <td>  <select name="taluk" id="taluk" style="width:250px;" required/><option value="-1">select</option></select></td></tr>
									</div> 
<div class="control-group">
									<tr><td><label class="control-label"><b>Postoffice:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                   <td><select name="post" id="post"style="width:250px;" required/><option value="-1">select</option></select></td></tr>
									</div>
								</div>									
					<div class="form-wrapper">
                    <tr><td>Phone Number</td>
					<td>
						<input type="text"  name="Phoneno"class="form-control"style="width:250px;" required/></td></tr>
						<i class="zmdi zmdi-email"></i>
					</div>
					
					
                        <!--<label for="male">Male</label>
<input type="radio" name="gender" id="male" value="male"><br>
<label for="female">Female</label>
<input type="radio" name="gender" id="female" value="female"><br>
<label for="other">Other</label>-->
<tr><td><label>Disability</label></td>
	<td>	<select  name="Disability" id="disid"style="width:250px;" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT disid,disability FROM tbl_disability where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['disid'] . '>' . $row['disability'] . '</option>';
            }
            ?>
              </select></td></tr>
					
					<div class="form-wrapper">
                    <tr><td>Housename</td>
					<td>
						<input type="text"  name="Housename" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
					</div>
					
					<div class="form-wrapper">
                    <tr><td>Account Number</td>
					<td>
						<input type="text"  name="Accno" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="form-wrapper">
                    <tr><td>IDProof</td>
					<td>
						<input type="file"  name="IDProof" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
					</div>

					
					<div class="form-wrapper">
                    <tr><td>Register Date</td>
					<td>
                        
						<input type="date"  name="Regdate" class="form-control"style="width:250px;"></td></tr>
						<i class="zmdi zmdi-lock"></i>
					</div>
					<div class="control-group">
								<tr><td>	<label class="control-label"><b>Religion:</b></label>
									<td><div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                       <select  name="Religion" id="Religion"style="width:250px;" required/>
                  <option value="-1">select</option>
                           
            <?php
            $q = mysqli_query($con, "SELECT Religionid,Religionname FROM religion where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['Religionid'] . '>' . $row['Religionname'] . '</option>';
            }
            ?>
              </select></td></tr>
									</div>
								</div>
                                          
                                    <div class="control-group">
								<tr><td>	<label class="control-label"><b>Caste:</b></label></td>
									<div class="controls">
                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                   <td> <select name="Caste" id="Caste"style="width:250px;" required/><option value="-1">select</option></select></td></tr>
									</div> 
					
					
					<div style="margin-top:60px;margin-left:100px;width:300px;">
				<tr><td>	<input type="submit" name="submit" value="Register" class="form-control"></td></tr>
					
					</div>
					</div>
                    </div>
                    </table>
                </form>
               
			</div>
		</div>
		
		<script src="../asset/js/jquery-3.3.1.min.js"></script>
		 <script>
			$(document).ready(function() {

                            $("#district").on("change", function(){
                                 $district = $('#district').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$district},
                                     url:'../gettaluk.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT TALUK--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#taluk").html($html);
                                     }
                                 });
                            });
                            
							 $("#taluk").on("change", function(){
                                 $taluk = $('#taluk').val();
                                 //alert($taluk);
                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$taluk},
                                     url:'../getpostoffice.php',
                                     success:function(data){
                                         $data = JSON.parse(data);
                                         
                                         
                                         $html = '<option value="">--SELECT POSTOFFICE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#post").html($html);
                                     }
                                 });
                            });
                            
                          
                            
			});
                              
                        
                        
		</script>
		<script>
		$(document).ready(function() {

                            $("#Religion").on("change", function(){
                                 $Religion = $('#Religion').val();

                                 $html = "";
                                 $.ajax({
                                     type:'post',
                                     data:{'index':$Religion},
                                     url:'../getcaste.php',
                                     success:function(data){
                                         $data = JSON.parse(data);                                         
                                         $html = '<option value="">--SELECT CASTE--</option>';
                                         for(var index=0; index<$data.length; index++){
                                            $html += '<option value="'+$data[index][0]+'">' + $data[index][1]+ "</option>";
                                         }
                                         
                                         $("#Caste").html($html);
                                     }
                                 });
                            });
							
		});
		
                            </script>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>