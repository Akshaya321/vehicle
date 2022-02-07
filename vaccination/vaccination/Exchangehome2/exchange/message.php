<?php
session_start();
//include '../query.php';
$uid=$_SESSION['login_id'];

include 'config.php';
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

</head>
<br><br>
<body>

<h3><font color="#990033" size="+3">Enter your Doubts&Suggestions </font></h3>
<br><br>
<?php
  
   
		  //$con=mysqli_connect("localhost","root","","employment");
		  include 'dbcon.php';
		  $qry="select * from userregistration where Userid='$uid'";
		   $res=setData($qry);
		  while($row=mysqli_fetch_array($res))
		  {
		 $fname=$row['Name'];

		  ?>


    <div class="regisFrm">
	<div class="container lsidebar span_1_of_3">
  <form action=""  onsubmit="return" class="oh-autoval-form" method="post">
    <label for="fname">Full Name</label>
    <input type="text" id="name" name="name" value="<?php echo $Name;?>" disabled placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="email" id="email" name="email" class="av-email" av-message="enter valid email" disabled placeholder="Your email..">

    

    <label for="subject">Suggestion</label>
    <textarea id="contact" name="contact" class="av-name" av-message="plese enter alphabets only" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Send">
	<?php }?> 
	</form>
	
	
	
 </div> 

 
	
	 
</div>


<br><br>
</body>
<br><br>
<?php 
include 'footer.php';
?>
</html>
