<?php
session_start();
//include '../query.php';
$id=$_SESSION['login_id'];

include 'config.php';
CheckLogout();

include 'dbcon.php';
?>
<?php

 $qry="select * from `userrregistration` where Userid='$id'";
 
//echo $qry;

      $a = mysqli_query($con, $qry) or die(mysqli_error($con));
     while ($rest=mysqli_fetch_array($a)) {
         $Name=$rest['Name'];
         $Phoneno=$rest['Phoneno'];
         $Place=$rest['Place'];
         $Housename=$rest['Housename'];
         $Accno=$rest['Accno'];

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/pay.css">

</head>
<body>

<center><h2><font color="#000000" size="+3">Checkout Form</font></h2></center>
<br>

<div class="row">
  <div class="col-75">
    <div class="container">
	<link rel="stylesheet" type="text/css" href="css/oh-autoval-style.css">
	<script src="js1/jquery.min.js"></script>
	<script src="js1/oh-autoval-script.js"></script>
    <div class="regisFrm">
      <form  onsubmit="return" class="oh-autoval-form" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3><font color="#000000" size="+2">Billing Address</font></h3>
			<br>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname"  value="<?php echo $Name;  ?>" disabled >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" value="<?php echo $email; ?>" disabled>
            
			

          
        <input type="submit" name="submit" id="submit" value="Continue to checkout" class="btn">
		<?php }?>
      </form>
    </div>
  </div>
 <?php
//$con=mysqli_connect("localhost","root","","store");
//include '../query.php';

//$qry1="select * from users";
//$res=setData($qry1);
if(isset($_POST['submit']))
{
extract($_POST);
//$uid=$row[0];
$cname=$_POST['cardname'];
$cno=$_POST['cardnumber'];
$month=$_POST['expmonth'];
$year=$_POST['expyear'];
$cvv=$_POST['cvv'];
$da=date('Y-m-d');
$qry="insert into tbl_payment(user_id,card_name,card_no,exp_month,exp_year,cvv,date) values('$uid','$cname','$cno','$month','$year','$cvv','$da')";
setData($qry);
echo "<script>window.onload=function(){alert('Payment Completed....!');window.location='index.php';}</script>";
}
?>
</div>

</body>
</html>
