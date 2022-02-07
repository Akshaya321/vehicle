<?php
session_start();
//include '../query.php';
$uid=$_SESSION['id'];
$fid=$_REQUEST['fid'];
include '../config.php';
CheckLogout();
include 'header.php';
 //include_once("../cartmaster/config.php");
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
body{
    font-family: Arial;
    width: 1362px;
	background-color:#FFFFFF;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.back
{background-color:#00CC99;
}
.lsidebar{
background-color:#00FF99;
	display: block;
	float:left;
	margin-right: 2%;
	border-right: 1px dotted #A30404;
	border-left: 2px;
} 
.span_1_of_3 {
	width: 30.9%;
	padding: 1.5% 2% 1.5% 1.5%;
}
.span_2_of_3 {
	width: 62.1%;
	margin-top: -54px;
}
.cont{
	display: block;
	float:left;
}
.banner-right-txt p {
    color: #fff;
    font-size: 6em;
	
    font-weight: 1000;
    text-transform: capitalize;
    letter-spacing: 1px;
    text-shadow: 3px 1px 11px #5f5e5e94;
    line-height: 21px;
font-family: 'Patrick Hand', cursive;
}
.banner-right-txt h4 {
    color: #fff;
    font-size: 6em;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: 2px;
    text-shadow: 3px 1px 11px #5f5e5e94;
    line-height: 40px;
font-family: 'Patrick Hand', cursive;
}
</style>
<link rel="stylesheet" type="text/css" href="css3/oh-autoval-style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/oh-autoval-script.js"></script>
</head>
<br><br>
<body>

<h3><font color="#990033" size="+3">Enter your Doubts&Suggestions </font></h3>
<br><br>
<?php
  
   
		  $con=mysqli_connect("localhost","root","","store");
		  $qry="select * from users where id='$uid'";
		   $res=setData($qry);
		  while($row=mysqli_fetch_array($res))
		  {
		 $fname=$row['first_name'];
$lname=$row['last_name'];	
$email=$row['email'];
		  ?>
		  


    <div class="regisFrm">
	<div class="container lsidebar span_1_of_3">
  <form action=""  onsubmit="return" class="oh-autoval-form" method="post">
    <label for="fname">Full Name</label>
    <input type="text" id="name" class="av-name" av-message="minimum 3 characters and alphabets only" name="name" value="<?php echo $fname; echo $lname; ?>" disabled placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email" id="email" name="email" class="av-email" av-message="enter valid email" value="<?php echo $email; ?>" disabled placeholder="Your email..">

    

    <label for="subject">Suggestion</label>
    <textarea id="contact" name="contact" class="av-name" av-message="plese enter alphabets only" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Send">
	 
	</form>
	<?php } ?>
	
	<?php
$con=mysqli_connect("localhost","root","","store");

if(isset($_POST['submit']))
{

$contact=$_POST['contact'];

$qry="insert into tbl_contact(user_id,far_id,text,status) values('$uid','$fid','$contact',1)";
$res=mysqli_query($con,$qry);
echo "<script>window.onload=function(){alert('Sending your suggestion to the farmer. Thank youuu....!');window.location='profilecard.php';}</script>";
}
?>
 </div>
 

 <div class="cont span_2_of_3 banner-right-txt">
 <h4> <font color="#990000" size="+5">VEGETABLES THAT GROW IN SHADE....... </font></h4>
	<p><font color="#006633" size="+2"><b>Organic production is an overall system of farm management and food production that aims at sustainable agriculture, high-quality products and the use of processes that do not harm neither the environment, nor human, plant or animal health and welfare.</b></font></p></div>
 <?php
  
   
		  $con=mysqli_connect("localhost","root","","store");
		  $qry="select * from tbl_upload where farmer_id='$fid'";
		   $res=setData($qry);
		  while($row=mysqli_fetch_array($res))
		  {
		 
		  ?>
		  
<div class="card">
 <div class=" grid_1_of_4 images_1_of_4" style="width:20%">
		 <img src="images/<?php echo $row['img_name'];?>"  style="width:1000%; height:250px;" />
  
 
 
  
  </div>
  
</div>

<?php }?>

	
	 
</div>


<br><br>
</body>
<br><br>
</html>
