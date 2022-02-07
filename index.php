<!DOCTYPE HTML>
<head>
<title>Classic White</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<!-- Contact Form -->
<link href="contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<link href="contact-form/css/uniform.css" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="js/jquery.tools.min.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<div class="header">
  <div id="site_title"><a href="index.html"><img src="img/logo.png" alt=""></a></div>
  <!-- Main Menu -->
  <ol id="menu">
    <li class="active_menu_item"><a href="index.html">Home</a>
      <!-- sub menu -->
      
    </li>
    
    <li><a href="#">About us</a>
     
     
    </li>
   <li><a href="reg/reg.php">User</a>
     
     
    </li>
 <li><a href="companyreg.php">Mechanic</a>
     
     
    </li>
<li><a href="LOGIN/login.html">Sign In</a>
     
     
    </li>
    <!-- END sub menu -->
 
   
      <!-- sub menu -->
      
    </li>
    <!-- END sub menu -->
    <li><a href="contact.html">Contact</a></li>
  </ol>
</div>
<!-- END header -->
<div id="container">
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      <div> <img src="img/demo/1.jpg" alt="">
        <h2>Welcome to Classic White</h2>
        <p>This system helps to find mechanics easily and quickly.It is difficult to find mechanics nearby area whenever you are travelling.This system helps overcome this issue by providing mechanic detailsin one click</p>
      </div>
      <div> <img src="img/demo/2.jpg" alt="">
        <h2>Meet Our Team</h2>
        <p>This system helps to find mechanics easily and quickly.It is difficult to find mechanics nearby area whenever you are travelling.This system helps overcome this issue by providing mechanic detailsin one click</p>
      </div>
      <div> <img src="img/demo/3.jpg" alt="">
       
        <p>This system helps to find mechanics easily and quickly.It is difficult to find mechanics nearby area whenever you are travelling.This system helps overcome this issue by providing mechanic detailsin one click</p>
      </div>
      <div> <img src="img/demo/4.jpg" alt="">
        
        <p>This system helps to find mechanics easily and quickly.It is difficult to find mechanics nearby area whenever you are travelling.This system helps overcome this issue by providing mechanic detailsin one click</p>
      </div>
      <div> <img src="img/demo/5.jpg" alt="">
        <h2>Supercar</h2>
        <p>This system helps to find mechanics easily and quickly.It is difficult to find mechanics nearby area whenever you are travelling.This system helps overcome this issue by providing mechanic detailsin one click</p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
        <li><a href="#1"><img src="img/demo/1.jpg" width="160" alt=""><strong></strong> </a></li>
        <li><a href="#2"><img src="img/demo/2.jpg" width="160" alt=""><strong></strong> </a></li>
        <li><a href="#3"><img src="img/demo/3.jpg" width="160" alt=""><strong></strong> </a></li>
        <li><a href="#4"><img src="img/demo/4.jpg" width="160" alt=""><strong></strong> </a></li>
        <li><a href="#5"><img src="img/demo/5.jpg" width="160" alt=""><strong></strong> </a></li>
      </ul>
    </div>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
  <div style="clear:both"></div>
  
 
 
  <div style="clear:both"></div>
  <div class="box_highlight" style="margin-top:40px">
   
  </div>
  <div class="one-half">
    <div class="heading_bg">
      <h2>About Us</h2>
    </div>
    <blockquote>This system helps to find mechanics easily and quickly.It is difficult to find mechanics nearby area whenever you are travelling.This system helps overcome this issue by providing mechanic detailsin one click </blockquote>
    <p style="text-align:right; margin-right: 16px; margin-bottom: 15px"><a href="#" class="button" style="font-size: 18px"></a></p>
    <div class="heading_bg">
     
    </div>
    
  </div>
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Contact us today!</h2>
    </div>
    <form action="#" class="TTWForm" method="post">
      <div id="field1-container" class="field f_50">
        <label for="field1">Name</label>
        <input name="name" id="field1" type="text">
      </div>
      <div id="field2-container" class="field f_50">
        <label for="field2">Telephone</label>
        <input name="tel" id="field2" type="text">
      </div>
      <div id="field5-container" class="field f_50">
        <label for="field5">Email</label>
        <input name="email" id="field5" type="email">
      </div>
      <div id="field4-container" class="field f_100">
        <label for="field4">Message</label>
        <textarea rows="5" cols="20" name="message" id="field4"></textarea>
      </div>
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Submit" type="submit">
      </div>
    </form>
  </div>
  <div style="clear:both; height: 40px"></div>
</div>
<!-- END container -->

  <!-- Third Column -->
 
<!-- END footer -->
</body>
</html>