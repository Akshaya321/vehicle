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


//session_start();

    // if(!isset($_SESSION['loginid']))
    // {
       // header("Location: login.php");  
   
    // }
     
if (isset($_POST['signup'])) {
    
    $postname = $_POST['postname'];
    $taluk_select = $_POST['taluk'];
  

     $sql4="select * from postoffice where postname='$postname'";
      $result1 = mysqli_query($con,$sql4);
    $row8 = mysqli_fetch_array($result1);
    if(count($row8)==0){
      $sql1="INSERT INTO `postoffice`( `postname`,`talukid`,`status`) VALUES ('$postname',$taluk_select,1)";
        
        $res = mysqli_query($con, $sql1)or die(mysqli_error($con));


        $p = "select max(postid) as lgid from postoffice";

        $q = mysqli_query($con, $p) or die(mysqli_error($con));
        $row = mysqli_fetch_array($q);
        $x = $row['lgid'];




        echo '<script> alert("Postoffice Added! ")</script>';


              }
else{
     echo '<script> alert("Postoffice Already Added! ")</script>';
}
    }

?>

<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap Admin Dashboard Template</title>
 
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="images/favicon.png" />
	</head>
	<body >
    
        
	<div style="margin-left:100px;margin-top:100px;max-width:700px;background-color:black; opacity:0.8;">
    
       <center><font face="Arial" size="5" style="margin-left:-55px; color:whitesmoke"><b>ADD POSTOFFICE</b></font></center><br>
      

<form name="form1" class="form-horizontal" method="post" action="" onsubmit="return">
   
		

<div class="form-group">
    <label class="col-md-4 control-label" for="street" style="color:whitesmoke; margin-left:290px;margin-top:10px;"> Taluk</label>  
    <div class="col-md-4" style="margin-top:10px;">
                 
                <select class="form-control" name="taluk" id="taluk" style="margin-left:290px; "required>
                        <option value="-1">select</option> 
                     <?php
            $q = mysqli_query($con, "SELECT talukid,talukname FROM taluk where status=1");
            //var_dump($q);

            while ($row = mysqli_fetch_array($q)) {
                echo '<option value=' . $row['talukid'] . '>' . $row['talukname'] . '</option>';
            }
            ?></select>

            </div>
</div><br>
               <div class="form-group">
            <label class="col-md-4 control-label" for="name" style="color:whitesmoke; margin-left:290px; margin-top:10px;">Postoffice</label>  
            <div class="col-md-4">
                <input id="postname" name="postname" type="text" placeholder="Enter postoffice name" class="form-control input-md" style="margin-left:290px; margin-top:10px;" required onChange="return fName()">

        
                <div style="margin-top:100px;margin-left:300px;width:100px;">
                <input type="submit" name="signup" value="ADD" id="signup" class="button button1" required/>
                 </div>   
          </div>

</form>
	</body>
	<?php
include 'footer.php';
?><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>




     
