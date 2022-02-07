<?php
include 'dbcon.php';
// $results=mysqli_query($con,"SELECT * FROM  userreg as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid ");
session_start();


 $id = $_SESSION['login_id'];
  
?>
<?php

 $qry="select * from `userrregistration` where Userid='$id'";
 
//echo $qry;

      $a = mysqli_query($con, $qry) or die(mysqli_error($con));
     while( $rest=mysqli_fetch_array($a))
     {
     $Name=$rest['Name'];
      $DOB=$rest['DOB'];
      $Gender=$rest['Gender'];
     $Photo=$rest['Photo'];
      $Phoneno=$rest['Phoneno'];
    //   $Place=$rest['Place'];
    //   $District=$rest['districtname'];
     
    //   $Talukname=$rest['talukname'];
    //   $postname=$rest['postname'];
    //   $disability=$rest['disid'];
    //   $Housename=$rest['Housename'];
    //   $Acco=$rest['Accno'];
    //   $Regdate=$rest['Regdate'];
    //  $Caste=$rest['Caste'];
    //   $Religion=$rest['Religionname'];
      // $IDProof=$rest['IDProof'];
     
    


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
  <style>
.button {
  display: inline-block;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #000000;
  background-color: #CCCCCC;
  border: 1px solid #000000;
  border-radius: 10px;
 
}

.button:hover {background-color:#FF3333; color:white;}

.button:active {
  background-color: #FF3333;
  
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
<form action="#" method="post" style="margin-top:100px;">
<center> 
<table>
      
<tr>
           
           <th></th>
          
           <th><img src=" <?php echo $Photo;?>" /></th>
       </tr>
<div>
<tr>
<th><center>Name</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Name'] ?>"></center></th>
    </tr>
</div>
  <tr>
       <th><center>DOB</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['DOB'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Gender</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Gender'] ?>"></center></th>
  </tr>

  <tr>
  <tr>
           
           <th><center>Phone No:</center></th>
           <th><center><input type="text" disabled value="<?php echo $rest['Phoneno'] ?>"></center></th>
       </tr>
       <tr>
        <th><center>Place</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Place'] ?>"></center></th>
  </tr>
  <!-- <tr>
       <th><center>District</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['districtname'] ?>"></center></th>
  </tr>
  
  <tr>
       <th><center>talukname</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['talukname'] ?>"></center></th>
  </tr> -->
  <!-- <tr>
       <th><center>postname</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['postname'] ?>"></center></th>
  </tr> -->
 
  <!-- <tr>
       <th><center>Disability</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['disid'] ?>"></center></th>
  </tr> -->
  <tr>
       <th><center>Housename</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Housename'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Accno</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Accno'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Regdate</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Regdate'] ?>"></center></th>
  </tr>
  <!-- <tr>
       <th><center>Caste</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Caste'] ?>"></center></th>
  </tr>
  <tr>
       <th><center>Religion</center></th>
      <th><center><input type="text" disabled value="<?php echo $rest['Religionname'] ?>"></center></th>
  </tr> -->
  
</div>
<!--            
      <th>Email</th>
      <th><?php echo $Email;?></th>
  </tr>
   <tr>
       <th>District</th>
      <th><?php echo $districtname;?></th>
  </tr>   
  <tr>
       <th>Taluk</th>
      <th><?php echo $talukname;?></th>
  </tr>

  <tr>
       <th>Postoffice</th>
      <th><?php echo $postname;?></th>
  </tr>  -->
  
  

  </table>
        <br>
        <br>    
  <a href="edituserprofile.php?id=<?php echo $rest[0]?>"><center>EDIT</a>
            </center>
</form>
       
        <?php
     }
     ?>
	
	
	