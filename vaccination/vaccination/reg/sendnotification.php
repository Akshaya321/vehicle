<?php
include '../dbcon.php';




if (isset($_POST['submit'])) {

    
    $a = $_POST["Title"];
    $b = $_POST["Description"];
    $c = $_POST["Date"];
	// $d = $_POST["Companydescription"];
    // $e = $_POST["postid"];
    // $f = $_POST["Companylocation"];
    // $g = $_POST["Mainbranch"];
	
	
		
    
 echo  $sql="INSERT INTO `tbl_notification`(`Title`,`Description`,`Date`,`Status`) VALUES ('$a','$b','$c',1)";
        
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
		
					<center><h2>Add Company Details</h2></center>
					<div class="form-group">
                        <tr><td>Company Phone</td>
					<td>	<input type="text"  name="Companyphoneno"style="width:300px;" class="form-control"></td></tr>
						
					</div>
                    <div class="form-group">
                        <tr><td>Company Icon </td>
					<td>	<input type="file"  name="Companyicon"style="width:300px;" class="form-control"></td></tr>
						
					</div>
                    <div class="form-group">
                        <tr><td>Company web</td>
					<td>	<input type="text"  name="Companyweb"style="width:300px;" class="form-control"></td></tr>
						
					</div>
                    <div class="form-group">
                        <tr><td>Company Description</td>
					<td>	<input type="text"  name="Companydescription"style="width:300px;" class="form-control"></td></tr>
						
					</div>
					
					
					<div class="control-group">
                
							<tr><td>		<label class="control-label"><b>District:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your country"  class="input-xlarge" required/>-->
                                                                       <td>     <select  name="district" id="district"style="width:300px;" required/>
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
                                  <td>  <select name="taluk" id="taluk"style="width:300px;" required/><option value="-1">select</option></select></td></tr>
									</div> 
<div class="control-group">
									<tr><td><label class="control-label"><b>Postoffice:</b></label></td>
									<div class="controls">
                                                                            <!--<input type="text" placeholder="Enter your state" id="state" name="state" class="input-xlarge" required/>-->
                                   <td><select name="post" id="post"style="width:300px;" required/><option value="-1">select</option></select></td></tr>
									</div>
								</div>									
					<div class="form-wrapper">
                    <tr><td>Main Location</td>
					<td>
						<input type="text"  name="Mainlocation"class="form-control"></td></tr>
						<i class="zmdi zmdi-email"></i>
					</div>
					
					<div class="form-wrapper">
                    <tr><td>Main Branch</td>
					<td>
						<input type="text"  name="Mainbranch" class="form-control"></td></tr>
						<i class="zmdi zmdi-lock"></i>
                        <!--<label for="male">Male</label>
<input type="radio" name="gender" id="male" value="male"><br>
<label for="female">Female</label>
<input type="radio" name="gender" id="female" value="female"><br>
<label for="other">Other</label>-->
                    </div>
                    <div style="margin-top:60px;margin-left:100px;width:300px;">
				<tr><td>	<input type="submit" name="submit" value="Register" class="form-control"required/></td></tr>
					
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
            
            <div style="margin-top:70px;margin-left:100px;width:100px;">
					<input type="submit" name="submit" value="Register" class="form-control"required/>
					</div>
					
					</div>
				</form>
		
		</div> 
        </div>    
		</script>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>