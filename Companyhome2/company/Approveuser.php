

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
    <table   > 
<tr>
           
           <th></th>
          
           <th><img src="./reg/<?php echo $Photo; ?>" /></th>
       </tr>
<tr>
          <th>Name</th>
      <th><?php echo $Name; ?></th>
  </tr>
  <tr>
       <th>DOB</th>
      <th><?php echo $DOB; ?></th>
  </tr>
  <tr>
       <th>Gender</th>
      <th><?php echo $Gender; ?></th>
  </tr>

  <tr>
  <tr>
           
           <th>Phone Number</th>
           <th><?php echo $Phoneno; ?></th>
       </tr>
       <tr>
           
           <th>Place</th>
           <th><?php echo $Place; ?></th>
       </tr>
       <tr>
           
           <th>Housename</th>
           <th><?php echo $Housename; ?></th>
       </tr>
       <tr>
           
           <th>Accno</th>
           <th><?php echo $Accno; ?></th>
       </tr>
       <tr>
           
           <th>Regdate</th>
           <th><?php echo $Regdate; ?></th>
       </tr>
           
      <!-- <th>Email</th>
      <th><//?php echo $Email; ?></th>
  </tr> -->
   <!--<tr>
       <th>District</th>
      <th><?php echo $districtname; ?></th>
  </tr>   
  <tr>
       <th>Taluk</th>
      <th><?php echo $talukname; ?></th>
  </tr>

  <tr>
       <th>Postoffice</th>
      <th><?php echo $postname; ?></th>
  </tr> -->
  <tr>
       <th><a href="aprovu.php?id='<?php echo $rest['Userid'] ?>'">Verified</a></th>
       <th><a href="delete.php?id='<?php echo $rest['Userid'] ?>'">DELETE</a></th>
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
