<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Employment Exchange | Login</title>

   
    <link href="CSS/bootstrap.min.css" rel="stylesheet" />
    
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="CSS/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="CSS/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="CSS/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="CSS/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="CSS/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="CSS/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="CSS/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="CSS/animate.css" rel="stylesheet">
    <link href="CSS/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="CSS/style.css" rel="stylesheet">
    
    <style>
        .landing-page-logo1 {
    margin-left: 100px;
}
    </style>
    <!-- Mainly scripts -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/bootstrap.min.js"></script>

   
</head>
    

<body class="gray-bg landing-page-bg">

<div class="middle-box text-center loginscreen animated fadeInDown">
    <div class="ibox-content">
        <h1 class="logo-name"><img class="img-responsive landing-page-logo1" src="img/LP_img/images.png" width="100px" height="100px">
        </h1>
        <h2 style="color: #b94040;margin-top: 16px;font-weight: bold">Un Employee's Login</h2>
        <p style="color: #000000;margin-top: 16px;"> your Username and Password.</p>
        <form method="post" action="./login.aspx" id="ctl00" class="m-t" role="form">
<div class="aspNetHidden">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="C5YFgGz2sWuMRb2hF2i+k3v7CNrnK+4xXeVDbWlEr3cTE37qOzQlwBF5yEdaMi1iSYB1+O7IQqhrQ8SAhB8v6U9J9th5q8flMR125zNlZic=" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['ctl00'];
if (!theForm) {
    theForm = document.ctl00;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=pynGkmcFUV13He1Qd6_TZIQ33776zxRGG310cgdNlbeiYRInL1MsD1Miy0H95z8lUZvb44SOaFDAJY18G9ozUg2&amp;t=636768674402700171" type="text/javascript"></script>


<script src="/WebResource.axd?d=JoBkLzP19aTuxbWOhHobYgcgnbFBEBL9naGdRqXoJB9zzbIIYcFpEBIvGC7nMq9bL7ffUw-bJPdZOLjUomSLtQ2&amp;t=636768674402700171" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="C2EE9ABB" />
	<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
	<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="tmxiwsr7nH7+ZMYa/ul8ZEghNYQLL99PL7mRB1WCqpnsvay5lg59SUZYUNiqFfWhG/twe6NPHPo5G7AIgdeXVgbFKwa1uiqI8xJNYyWYxkCDL10X9ZnCZ1gSbjUDAGf2oAYZYkoEwGyGPxY9ml7JIQdSDt0Cz0NV21mV0530Mnw=" />
</div>
            <div class="form-group">
                
                <input name="txtusername" type="text" id="txtusername" class="form-control" autocomplete="off" required="" />
            </div>
            <div class="form-group">
                
                <input name="txtpassword" type="password" id="txtpassword" class="form-control" required="" />
            </div>
           
            <input type="submit" name="btnsubmit" value="Login" id="btnsubmit" class="btn btn-primary block full-width m-b" />
            
            <span id="lbllogin" style="color:Red;"></span>
			<a href="NewSignup.aspx">
                New User Registration?
            </a>
            <a href="Forgetpassword.aspx">
                Forgot password?
            </a>
            <a href="Default.aspx">
                Home
            </a>
        

<script type="text/javascript">
//<![CDATA[
WebForm_AutoFocus('txtusername');//]]>
</script>
</form>
        
    </div>

</div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header  bg bg-success">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><i class="fa fa-hand-o-right" aria-hidden="true"></i>
<label> Guidelines for Registration in Employment Exchanges of Telangana State</label></h4>
        </div>
        <div class="modal-body">
            <br />
        <p>Any citizen of India can register at Employment Exchange of Telangana State.</p>
            <p>Nativity of the candidate is the criteria to register in the concerned District Employment
Exchange.</p>
            <p>Candidates should not be less than 14 yrs of age as on the date of registration and for illiterate
candidates registration, 1 st July of that year shall be considered.</p>
            <p>Candidates should upload all relevant certificates to consider for registration.</p>
            <p>For further details go through the <a href="guidelines.pdf" target="_blank"> <b>“GUIDELINES FOR REGISTRATION IN EMPLOYMENT
EXCHANGES OF TELANGANA STATE”</b>.</a></p>
            <br />
            <p><b> <a href="UserManual_EmploymentTS.pdf"> <font color="red">User Manual --> Download</font></a></b></p>
            <br />
         <p> <a href="NewSignup.aspx"> <button type="button" class="btn btn-primary">New Candidate to enter into Portal Click Here</button></a></p> 
            <br />
             <br />
            <button type="button" class="btn btn-success" data-dismiss="modal">Existing User Click Here</button> &nbsp;&nbsp;<a href="MobileNumberChange.aspx"> <button type="button" class="btn btn-warning"> Check /Update your Mobile Number</button></a>
        </div>
        <div class="modal-footer  bg bg-success">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
</div>
     <script>
        $(window).load(function () {
            $('#onload').modal('show');
        });
    </script>

</body>

</html>

