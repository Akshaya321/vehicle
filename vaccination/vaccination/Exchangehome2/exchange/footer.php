<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->

<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="exchange_home.php"><i class="fa fa-tachometer"></i> <span>HOME PAGE</span><div class="clearfix"></div></a></li>
										<li id="menu-academico" ><a href="view.php"><i class="fa fa-map-marker"></i>  <span>View Companies</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
										<li id="menu-academico" ><a href="view3.php"><i class="fa fa-map-marker"></i>  <span>View Registeredusers</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
										 
										 
										 
										 <li id="menu-academico" ><a href="view4.php"><i class="fa fa-map-marker"></i>  <span>View Vacancies</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
										 
										  <li id="menu-academico" ><a href="view11.php"><i class="fa fa-map-marker"></i>  <span>View Application</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										
									
							        <li id="menu-academico" ><a href="view10.php"><i class="fa fa-file-text-o"></i>  <span>View Shortlisted candidates</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 
									 </li>
											
									<li><a href="view5.php"><i class="fa fa-gears nav_icon"></i><span>View Notifications</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  
									</li>
									<li><a href="payment.php"><i class="fa fa-gears nav_icon"></i><span>View Payment</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  </li>
									<li><a href="Addnotification.php"><i class="fa fa-gears nav_icon"></i><span>Add Notification</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									</li>
									</li>
									<li><a href="Approveuser.php"><i class="fa fa-gears nav_icon"></i><span>User Approval</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									
									</li>
									<li><a href="viewpayment.php"><i class="fa fa-gears nav_icon"></i><span>View Payment details</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									
									</li>
									<li><a href="changepassword.php"><i class="fa fa-gears nav_icon"></i><span>Change Password</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									
									</li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>