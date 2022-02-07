<?php
include 'dbcon.php';
session_start();


//$id = $_SESSION['login_id'];
  
?>
<?php

 echo $qry="select * from `login` where Usertype='4' and Status='0'" ;
 $a = mysqli_query($con, $qry) or die(mysqli_error($con));
 while ($rests=mysqli_fetch_array($a)) {
     echo $logid=$rests['login_id'];
 $results=mysqli_query($con,"SELECT * FROM  companyreg as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid and ad.comregid='$logid'");
// print_r($results);
// return;
     //echo $results;
      //$b = mysqli_query($con, $results) or die(mysqli_error($con));
      while ($rest=mysqli_fetch_array($results)) {
         //$logid=$rests['login_id'];
        //  $qrys="select * from companyreg where comregid='$logid'";
        //  $b=mysqli_query($con, $qrys);
        //  while ($rest=mysqli_fetch_array($b)) {
             $Companyname=$rest['Companyname'];
             $Sector=$rest['Sector'];
             $Regno=$rest['Regno'];
             $Location=$rest['Location'];
             $postname=$rest['postname'];
             $talukname=$rest['talukname'];
             $districtname=$rest['districtname'];
              $Phone=$rest['Phone'];
            //  $Regdate=$rest['Regdate'];
             //$Email=$rest['Email']; ?>
<html>
    <head>
</head>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<!--<a href="index.html"><h1><span>Welcome</span> User</h1></a>-->
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
							<!--<li role="presentation"><a href="../viewuserdetails.php" class="active">ADD USERDETAILS</a></li>-->
								<!--<li role="presentation"><a href="../viewcompany.php">HOME</a></li>
								<li role="presentation"><a href="../Adduserprofile.php">Add Details</a></li>								
								<li role="presentation"><a href="../viewuserdetails.php">View Profile</a></li>
								<li role="presentation"><a href="../changepassword.php">Change Password</a></li>
								<li role="presentation"><a href="blog.html">Logout</a></li>-->
								<!--<li role="presentation"><a href="contact.html">Contact</a></li>	-->					
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/image3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                   <!-- <h2 class="animation animated-item-1">Welcome <span>User</span></h2>-->
                                    
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <!--<img src="images/slider/img3.png" class="img-responsive">-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
    
    	
    </section><!--/#conatcat-info-->
    <table > 

<tr>
          <th>Companyname</th>
      <th><?php echo $Companyname; ?></th>
  </tr>
  <tr>
       <th>Sector</th>
      <th><?php echo $Sector; ?></th>
  </tr>
  <tr>
       <th>Regno</th>
      <th><?php echo $Regno; ?></th>
  </tr>

  <tr>
  <tr>
           
           <th>Location</th>
           <th><?php echo $Location; ?></th>
       </tr>
       <tr>
           
           <th>postname</th>
           <th><?php echo $postname; ?></th>
       </tr>
       <tr>
           
           <th>talukname</th>
           <th><?php echo $talukname; ?></th>
       </tr>
       <tr>
           
           <th>districtname</th>
           <th><?php echo $districtname; ?></th>
       </tr>
       <tr>
           
           <th>Phone</th>
           <th><?php echo $Phone; ?></th>
       </tr> 
           
     
  
 
   <tr>
       <th><a href="companyaprovu.php?id='<?php echo $rest['comregid'] ?>'">APPROVE</a></th>
       <!--th><a href="delete.php?id='<?php echo $rest['Userid'] ?>'">DELETE</a></th>-->
  </tr>  
      
     
  
        </table>
	<footer>
	
				<!-- <div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; June  2015 by <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Bootstrap Themes</a>. All Rights Reserved.
					</div> -->
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
                    -->
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer>
<?php
         }
         }
?>
