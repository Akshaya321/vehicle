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

    
    $a = $_POST["Name"];
    $b = $_POST["Address"];
    $c = $_POST["Place"];
	$d = $_POST["Phone"];
   
	

  
  echo $sql2="INSERT INTO `mechanic`(`Name`,`Address`,`Place`,`Phone`, `status`) VALUES ('$a','$b','$c','$d',1)";
        
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
		
					<center><h2>Add Mechanic</h2></center>
					<div class="form-group">
                        <tr><td> Name</td>
					<td>	<input type="text"  name="Name"style="width:300px;" class="form-control" required/></td></tr>
						
					</div>
<div class="form-group">
                        <tr><td> Address</td>
					<td>	<input type="text"  name="Address"style="width:300px;" class="form-control" required/></td></tr>
						
					</div>
                    
                    <div class="form-group">
                        <tr><td> Place</td>
					<td>	<input type="text"  name="Place"style="width:300px;" class="form-control" required/></td></tr>
						
					</div><div class="form-group">
                        <tr><td> Phone no</td>
					<td>	<input type="numbert"  name="Phone"style="width:300px;" class="form-control" required/></td></tr>
						
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