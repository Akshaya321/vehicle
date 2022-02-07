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

    
    $b = $_POST["Employmentname"];
    $c = $_POST["post"];
    $e = $_POST["Phoneno"];
	$f = $_POST["Email"];
	$j = $_POST["Mainbranch"];
    //$i = $_POST["Officer"];
   
	

  
  echo $sql2="INSERT INTO `addexchange`(`Employmentname`,`postid`,`Phoneno`,`Email`,`Mainbranch`, `status`) VALUES ('$b','$c','$e','$f','$j',1)";
        
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

    <body> 
    <!--style="background-image: url(../images/im1.jpg);background-repeat:no-repeat;"> -->
    
		<div class="wrapper" >
			<div class="inner">
            <div class="item active" >
            <br>
            <br>    
  <center>
			<form action="#" method="post"  style=" border:solid 2px #000;width:500px;">
		    
            <table>
				<div style="display:inline-block;vertical-align:top;width:300px;">
		
					<center><h2>Add Exchange</h2></center>
					<div class="form-group">
                        <tr><td>Employment Name</td>
					<td>	<input type="text"  name="Employmentname"style="width:300px;" class="form-control" required/></td></tr>
						
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
                                   <td><select name="post" id="post" style="width:300px;" required/><option value="-1">select</option></select></td></tr>
									</div>
								</div>									
					<div class="form-wrapper">
                    <tr><td>Phone Number</td>
					<td>
						<input type="text"  name="Phoneno" class="form-control" required/></td></tr>
						
					</div>
					
					<div class="form-wrapper">
                    <tr><td>Email</td>
					<td>
						<input type="text"  name="Email" class="form-control" required/></td></tr>
						
</div>
					<div class="form-wrapper">
                    <tr><td>Main Branch</td>
					<td>
						<input type="text"  name="Mainbranch"class="form-control" required/></td></tr>
						<i class="zmdi zmdi-email"></i>
					</div>
					</div>
					
					<div style="margin-top:60px;margin-left:150px;width:200px;">
				<tr><td>
<center>				
                <input type="submit" name="submit" value="ADD" class="form-control"required/></td></tr>
				 
					
					</div>
					<!-- </div>
                    </div> -->
					
					
					
					
					
					
					
					
				
				
                    </table>
                    
                </form>
        </center>
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
                                     url:'../../gettaluk.php',
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
                                     url:'../../getpostoffice.php',
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
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
	<?php
include 'footer.php';
?>
</html>