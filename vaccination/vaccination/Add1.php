<?php
include 'dbcon.php';
?>
<?php
if(isset($_POST['submit']))
{
$cat=$_POST["category"];
$square=$_POST["square"];
$fur=$_POST["furnishing"];
$bed=$_POST["bedrooms"];
$bal=$_POST["balcony"];
$fl=$_POST["floor"];
$photo="imges/".time()."".htmlspecialchars($_FILES["imges"]["name"]);
move_uploaded_file($_FILES["imges"]["name"],$photo);
$photo1="imges/".time()."".htmlspecialchars($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["name"],$photo1);
$photo2="imges/".time()."".htmlspecialchars($_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["name"],$photo2);

$trans=$_POST["transaction"];
$pos=$_POST["possession"];
$avail=$_POST["available"];
$price=$_POST["price"];
$road=$_POST["road"];
$school=$_POST["school"];
$rail=$_POST["railway"];



  $sql1="INSERT INTO `tbl_home`(`category`,`squarefeet`,`furnishing`,`bedrooms`,`balcony`,`floorno`,`image`,`image1`,`image2`,`transaction`,`possession`,`availablefrom`,`price`,`mainroad`,`school`,`railway`,`status`) VALUES ('$cat','$square','$fur','$bed','$bal','$fl','$photo','$photo1','$photo2','$trans','$pos','$avail','$price','$road','$school','$rail',0)";
$result1=mysqli_query($con,$sql1);



 if($result1==1)
 {
         echo"<script> alert('Added Successfully');</script>";
         
       
 }

}
if(isset($_POST['submit1']))
{
$cat=$_POST["category"];
$area=$_POST["area"];
$length=$_POST["length"];
$breadth=$_POST["breadth"];
$trans=$_POST["transaction"];
$price=$_POST["price"];
$photo="imges/".time()."".htmlspecialchars($_FILES["imges"]["name"]);
move_uploaded_file($_FILES["imges"]["name"],$photo);
$photo1="imges/".time()."".htmlspecialchars($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["name"],$photo1);
$photo2="imges/".time()."".htmlspecialchars($_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["name"],$photo2);

$trans=$_POST["transaction"];
$pos=$_POST["possession"];
$avail=$_POST["available"];
$price=$_POST["pric"];
$road=$_POST["road"];
$school=$_POST["school"];
$rail=$_POST["railway"];



 echo $sql1="INSERT INTO `tbl_land`(`category`,`area`,`length`,`breadth`,`transaction`,`price`,`image`,`image1`,`image2`,`status`) VALUES ('$cat','$area','$length','$breadth','$trans','$price','$photo','$photo1','$photo2',1)";
$result1=mysqli_query($con,$sql1);



 if($result1==1)
 {
         echo"<script> alert('Added Successfully');</script>";
         
       
 }

}

if(isset($_POST['submit2']))
{
    $cat=$_POST["category"];
    $square=$_POST["squarefeet"];
    $fur=$_POST["furnishing"];
    $bed=$_POST["bedrooms"];
    $bal=$_POST["balcony"];
    $fl=$_POST["floor"];
    $photo="imges/".time()."".htmlspecialchars($_FILES["imges"]["name"]);
    move_uploaded_file($_FILES["imges"]["name"],$photo);
    $photo1="imges/".time()."".htmlspecialchars($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["name"],$photo1);
    $photo2="imges/".time()."".htmlspecialchars($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["name"],$photo2);
    
    $trans=$_POST["transaction"];
    $pos=$_POST["possession"];
    $avail=$_POST["availablefrom"];
    $price=$_POST["price"];
    $road=$_POST["road"];
    $school=$_POST["school"];
    $rail=$_POST["railway"];
    
    
    
     $sql1="INSERT INTO `tbl_home`(`category`,`squarefeet`,`furnishing`,`bedrooms`,`balcony`,`floorno`,`image`,`image1`,`image2`,`transaction`,`possession`,`availablefrom`,`price`,`mainroad`,`school`,`railway`,`status`) VALUES ('$cat','$square','$fur','$bed','$bal','$fl','$photo','$photo1','$photo2','$trans','$pos','$avail','$price','$road','$school','$rail',0)";
    $result1=mysqli_query($con,$sql1);
    
    
    
     if($result1==1)
     {
             echo"<script> alert('Added Successfully');</script>";
             
           
     }
    
    }


  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LERAMIZ - Landing Page Template</title>
<meta charset="UTF-8">
	<meta name="description" content="LERAMIZ Landing Page Template">
	<meta name="keywords" content="LERAMIZ, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/style.css"/>

    <link rel="stylesheet" type="text/css" href="jsval/oh-autoval-style.css">

 <script src="jsval/jquery.min.js"> </script> 

  <script src="jsval/oh-autoval-script.js"></script>  
   
</head>
<body>

	
	
	<!-- Header section -->
	<header class="header-section" style="background-color:black;">
		
					
						<div class="user-panel"  style="margin-top:-10px;margin-left:450px;">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="img/logo.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
							<li><a href="userhome.php">Home</a></li>
						<!--	<li><a href="categories.html">FEATURED LISTING</a></li>-->
							<!-- <li><a href="about.php">ABOUT US</a></li>
							
						
							<li><a href="contact.php">Contact</a></li> -->
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
<div style="margin-top:130px;margin-left:850px;width:300px;background-color:skyblue;height:250px;">
<img src = "images/book.png" style="width:50px;margin-left:120px;margin-top:30px;"/><br>
<h6 style="margin-left:70px;margin-top:10px;"><b>Quick Step To Post Online</b></h6><br>
<h6 style="margin-left:30px;">5 easy steps to post and manage property</h6><br>
<h6><a href="post.php" style="color:red;margin-left:100px;">See Them Here</a></h6>

    </div>
<div  style="margin-left:50px;margin-top:-250px;background-color:#f1f1f1;width:700px;height:1300px;">

<form action="#" method="post" enctype="multipart/form-data">

<div style="background-color:#e9e9e9;width:550px;">
<h3 style="margin-left:30px;">Sell Your Property Here</h3><br>
<h6 style="margin-left:30px;">We've over 15 Lac buyers for you!</h6><br>
<h6 style="margin-left:30px;">You are posting this property for<span style="background-color:yellow;"> FREE!</span></h6></div>

<div class="form-group" style="margin-left:30px;margin-top:20px;">

    <label>Property Type</label>
    <select name="category" style="width:150px;height:25px;border-radius:4px;margin-left:10px;" onchange="yesnoCheck(this);">
                  <option>Select</option>
          <option value="home">Home</option>
    <option value="land">Land</option>
    <option value="shopping">Shop</option>
    
                 </select></div>

                 <div class="form-group" style="margin-left:30px;">
                 <h5>Property Location</h5><br>
                 <label>Location</label>
    <select name="" style="width:150px;height:25px;border-radius:4px;margin-left:40px;">
                  <option>Select</option>
          <option value="">wayanad</option>
    <option value="">Kottayam</option>
    <option value="">Thrissur</option>
    
                 </select></div>
                 
                    <div id="ifYes" style="display: none;">
                    <h5 style="margin-left:30px;">Property Features</h5><br>
                    <div class="form-group" style="margin-left:30px;">
                    <label>Squarefeet</label>
                    <input type="text" name="square" id="square" style="border-radius:4px;margin-left:30px;" required/>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Furnishing</label>
                       <select name="furnishing" style="width:180px;margin-left:33px;border-radius:4px;" required>
                       <option>Fully Furnished</option>
                       <option>Semi Furnished</option>
                       <option>Under Furnished</option>
                       </select>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Bedrooms</label>
                       <select name="bedrooms" style="width:180px;margin-left:33px;border-radius:4px;" required>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>Balcony</label>
                       <select name="balcony"style="width:180px;margin-left:49px;px;border-radius:4px;" required>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>No of Floors</label>
                       <select name="floor" style="width:180px;margin-left:25px;border-radius:4px;"required>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                    <h5>Transaction Type/Avialibilty From</h5><br>
                    <label>Transaction Type</label>
                    <input type="radio" name="transaction" value="resale" checked>Resale
                    <input type="radio" name="transaction" value="newproperty">New Property<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Possession Status</label>
                    <input type="radio" name="possession" value="underconstruction" checked>Under Construction
                    <input type="radio" name="possession" value="readytomove">Ready to move<br>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Available From</label>
                   <input type="date" name="available" id="available" style="margin-left:20px;border-radius:4px;" required/>
                   </div>
                   <div class="form-group"style="margin-left:30px;"> 
                   <h5>Price Details</h5><br> 
                   <label>Expected Price</label>
                   <input type="text" name="price" id="price" style="margin-left:20px;border-radius:4px;width:170px;"required/>
                   </div>
                  
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Facilities</h5><br>
                    <label>Is Main Road Facing </label>
                    <input type="radio" name="road" value="yes" checked>Yes
                    <input type="radio" name="road" value="no">No<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                    <label>Near School/College</label>
                    <input type="radio" name="school" value="yes" checked>Yes
                    <input type="radio" name="school" value="no">No<br>
  
                   </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                    <label>Railway Station</label>
                    <input type="radio" name="railway" value="yes" checked>Yes
                    <input type="radio" name="railway" value="no">No<br>
                    </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Photos</h5><br>
                   <label>Exterior View</label><br>
                   <input type="file" name="imges" id="imges"/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Living Room</label><br>
                   <input type="file" name="image" id="image" required/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Bedroom</label><br>
                   <input type="file" name="img" id="img"/>
                   </div>
                   <div class="form-group">
                   <input type="submit" name="submit" value="ADD" style="width:100px;margin-left:200px;" required/>
                   </div>
                   </div>
                   <div id="no" style="display: none;">
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Area</h5><br>
                    <label>Plot Area</label>
                    <input type="text" name="area" id="area"  style="margin-left:35px;border-radius:4px;" required/>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                   
                    <label>Plot Length</label>
                    <input type="text" name="length" id="length"  style="margin-left:20px;border-radius:4px;" required/>
                     </div>
                     <div class="form-group" style="margin-left:30px;">
                   
                    <label>Plot Breadth</label>
                    <input type="text" name="breadth" id="breadth"  style="margin-left:15px;border-radius:4px;" required/>
                   
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                    <h5>Transaction Type/Avialibilty From</h5><br>
                    <label>Transaction Type</label>
                    <input type="radio" name="transaction" value="resale" checked>Resale
                    <input type="radio" name="transaction" value="newproperty">New Property<br>
  
                   </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Price Details</h5><br>
                   <label>Expected Price</label>
                   <input type="text" name="pric" id="price" style="margin-left:15px;border-radius:4px;" required/>
                   </div>

                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Photos</h5><br>
                   <label>Image</label>
                   <input type="file" name="imges" id="imges" required/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Image</label>
                   <input type="file" name="image" id="image" required/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Image</label>
                   <input type="file" name="img" id="img" required/>
                   </div>
                   <div class="form-group">
                   <input type="submit" name="submit1" value="ADD"/>
                   </div>
                   </div>
                   
                   <div id="if" style="display: none;">
                   <h5 style="margin-left:30px;">Property Features</h5><br>
                    <div class="form-group" style="margin-left:30px;">
                    <label>Squarefeet</label>
                    <input type="text" name="squarefeet" id="square" style="border-radius:4px;margin-left:30px;" required/>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Furnishing</label>
                       <select name="furnishing" style="width:180px;margin-left:33px;border-radius:4px;" required>
                       <option>Fully Furnished</option>
                       <option>Semi Furnished</option>
                       <option>Under Furnished</option>
                       </select>
                    </div>
                    <div class="form-group" style="margin-left:30px;">
                        <label>Bedrooms</label>
                       <select name="bedrooms" style="width:180px;margin-left:33px;border-radius:4px;" required>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>Balcony</label>
                       <select name="balcony"style="width:180px;margin-left:49px;px;border-radius:4px;" required>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       <option>4</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                        <label>No of Floors</label>
                       <select name="floor" style="width:180px;margin-left:25px;border-radius:4px;"required>
                       <option>1</option>
                       <option>2</option>
                       <option>3</option>
                       </select>
                    </div>
                   
                    <div class="form-group" style="margin-left:30px;">
                    <h5>Transaction Type/Avialibilty From</h5><br>
                    <label>Transaction Type</label>
                    <input type="radio" name="transaction" value="resale" checked>Resale
                    <input type="radio" name="transaction" value="newproperty">New Property<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Possession Status</label>
                    <input type="radio" name="possession" value="underconstruction" checked>Under Construction
                    <input type="radio" name="possession" value="readytomove">Ready to move<br>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Available From</label>
                   <input type="date" name="availablefrom" id="available" style="margin-left:20px;border-radius:4px;" required/>
                   </div>
                   <div class="form-group"style="margin-left:30px;"> 
                   <h5>Price Details</h5><br> 
                   <label>Expected Price</label>
                   <input type="text" name="price" id="price" style="margin-left:20px;border-radius:4px;width:170px;" requireds/>
                   </div>
                  
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Facilities</h5><br>
                    <label>Is Main Road Facing </label>
                    <input type="radio" name="road" value="yes" checked>Yes
                    <input type="radio" name="road" value="no">No<br>
  
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                    <label>Near School/College</label>
                    <input type="radio" name="school" value="yes" checked>Yes
                    <input type="radio" name="school" value="no">No<br>
  
                   </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                    <label>Railway Station</label>
                    <input type="radio" name="railway" value="yes" checked>Yes
                    <input type="radio" name="railway" value="no">No<br>
                    </div>
                   
                   <div class="form-group" style="margin-left:30px;">
                   <h5>Photos</h5><br>
                   <label>Exterior View</label><br>
                   <input type="file" name="imges" id="imges" required/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Living Room</label><br>
                   <input type="file" name="image" id="image" required/>
                   </div>
                   <div class="form-group" style="margin-left:30px;">
                   <label>Bedroom</label><br>
                   <input type="file" name="img" id="img" required/>
                   </div>
                   <div class="form-group">
                   <input type="submit" name="submit2" value="ADD"/>
                   </div>
                   </div>
                  

                    <script>
    function yesnoCheck(that) {
        if (that.value == "home") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
      
         if (that.value == "land") {
            //alert("check");
            document.getElementById("no").style.display = "block";
        } else {
            document.getElementById("no").style.display = "none";
        }
          if (that.value == "shopping") {
            //alert("check");
            document.getElementById("if").style.display = "block";
        } else {
            document.getElementById("if").style.display = "none";
        }
        
    }
</script>

</form>

</div>
</body>
</html>