<?php
session_start();
//include '../query.php';
$uid=$_SESSION['login_id'];
include 'config.php';
CheckLogout();
include 'header.php';
 //include_once("../cartmaster/config.php");
?>
<?php
$con=mysqli_connect("localhost","root","","vehicle");

if(isset($_POST['submit']))
{
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['message'];

$qry="insert into message(name,email,message,status) values('$a','$b','$c',1)";
$res=mysqli_query($con,$qry);
echo "<script>window.onload=function(){alert('Thanks For your feedback about the site....!');window.location='Company_home.php';}</script>";
}
?>
<br><br>
<link rel="stylesheet" href="css3/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link href="css3/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- banner slider -->
	<link rel="stylesheet" href="css3/style3.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css3/font-awesome.min.css" rel="stylesheet">
	
<style>



/* footer */
footer {
    background: #66CC33;
}

/* newsletter */
h3.tittle,
h2.tittle {
    font-size: 36px;
    letter-spacing: 1px;
    position: relative;
}

h3.tittle:before,
h2.tittle:before {
    content: "";
    background: #fff;
    width: 60px;
    height: 3px;
    position: absolute;
    bottom: -25px;
    left: 0;
}

input.form-control {
    background: #fff;
    border: none;
    padding: 12px 15px;
    letter-spacing: 1px;
    font-size: 15px;
}

.n-right-w3ls button {
    background: #000;
    border: none;
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 2px;
    cursor: pointer;
    padding: 13px;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

.n-right-w3ls button:hover {
    /*background: #30c39e;*/
    letter-spacing: 6px;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    transition: 0.5s all;
}

/* //newsletter */



</style>

	<!-- footer -->
	
	
    

	<footer class="py-5">
		<div style="padding:5px 100px;">
			<!-- newsletter -->
			<div class="newsletter_right_w3w3pvt-lau pb-md-5 pb-3" id="newsletter">
			<h2 class="tittle text-wh mb-5 font-weight-bold"><font color="#000000">Enter Response</font></h2>
			<br><br>
				<div class="container" style=" width:700px;background:#66CC33;">
				<link rel="stylesheet" type="text/css" href="css3/oh-autoval-style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/oh-autoval-script.js"></script>
				<div class="regisFrm">
				<form   onsubmit="return" class="oh-autoval-form" method="post" >
						<div class="row">
							<div style="width:95%;">
								<input class="form-control av-name" type="text" name="name"  av-message="minimum 3 characters and alphabets only" placeholder="Name" required="">
							</div>
							<br>
							<div style="width:95%;">
								<input class="form-control av-email" type="email" name="email"  av-message="enter valid email" placeholder="Email Address" required="">
							</div>
							<br>
							<div style="width:95%;">
								<textarea class="form-control av-name" type="text" name="message"  av-message="Please enter your feedback" placeholder="Please write here....." required="" style="height:200px; width:100%" ></textarea>
							</div>
							<br>
						</div>
						</br>
						<div>
							<font size="+1"><input  type="submit" name="submit" value="SEND" style="background-color:#006699; width:95%; height:100%"></font>
							</div>
							<br><br>
					</form>
					
					</div>
					
					
					</div>
					
				</div>
			</div>
			</div>
			
			</footer>
			<!-- //newsletter -->
			<!-- slides images -->
	<!--div class="slide-imaes">

	</div>
	<!-- //slides images -->

</body>
<?php 
include 'footer.php';
?>
</html>