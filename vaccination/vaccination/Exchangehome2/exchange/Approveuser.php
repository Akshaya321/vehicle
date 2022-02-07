<?php
include '../../dbcon.php';
session_start();
include 'header.php';

//$id = $_SESSION['login_id'];
  
?>

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
  <table> 
   <tr>
    <th>Name</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Phone Number</th>
    <th>Place</th>
    <th>Housename</th>
    <th>Account Number</th>
	<th>Registration Date</th>
	<th >Operations</th>
    
  </tr>
        
 <?php

 $qry="select * from `login` where Usertype='2' and Status='0'" ;

      $a = mysqli_query($con, $qry) or die(mysqli_error($con));
     while ($rests=mysqli_fetch_array($a)) {
         $logid=$rests['login_id'];
         $qrys="select * from userrregistration where Userid='$logid'";
         $b=mysqli_query($con, $qrys);
         while ($rest=mysqli_fetch_array($b)) {
             $Name=$rest['Name'];
             $DOB=$rest['DOB'];
             $Gender=$rest['Gender'];
             $Photo=$rest['Photo'];
             $Phoneno=$rest['Phoneno'];
             $Place=$rest['Place'];
             $Housename=$rest['Housename'];
             $Accno=$rest['Accno'];
             $Regdate=$rest['Regdate'];
             //$Email=$rest['Email']; ?>
<tr>
<td><?php echo $Name; ?>
</td>

<td><?php echo $DOB; ?>
</td>

<td><?php echo $Gender; ?>
</td>

<td><?php echo $Photo; ?>
</td>

<td><?php echo $Phoneno; ?>
</td>
<td><?php echo $Place; ?>
</td>
<td><?php echo $Housename; ?>
</td>
<td><?php echo $Accno; ?>
</td>
<td ><a href="aprovu.php?id='<?php echo $rest['Userid'] ?>'" >APPROVED</a></td>
<td><a href="../../index.php?id='<?php echo $rest['Userid'] ?>'">DELETE</a></td>

</tr>
           
          
     
  
      
     
  
        </table>
	<?php
include 'footer.php';
?>
<?php
         }
         }
?>
