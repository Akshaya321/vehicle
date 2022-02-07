<?php
include '../dbcon.php';
//database connection page
session_start();
 
if(isset($_POST["submit"]))
{
	$Email=$_POST['Email'];   //username value from the form
	$pwd=$_POST['pass'];	//password value from the form
	 
       // $password = encryptIt($pwd);
 $sql="select * from login where email='$Email' and Password ='$pwd' and status=1"; //sql query to the table
	$res=mysqli_query($con,$sql);  //query executing function
     
        if($res)
{
	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch['Usertype']=='1')   
		{
                 
			///$_SESSION["name"]=$fetch['name'];
			$_SESSION["login_id"]=$fetch['login_id'];
			$_SESSION["email"]=$Email;	// setting username as session variable 
	header("location:../Adminhome1/admin/admin_home.php");	//home page or the dashboard page to be redirected
	}
	elseif($fetch['Usertype']=='2')   
		{
			//ssession_start();
		$_SESSION["email"]=$Email;	// setting username as session variable 
		$_SESSION["login_id"]=$fetch['login_id'];




	header("location:../Userhome1/user/user_home.php");
	}
       elseif($fetch['Usertype']==3)   
		{
		$_SESSION["email"]=$Email;	// setting username as session variable 
		$_SESSION["login_id"]=$fetch['login_id'];
	header("location:../Exchangehome2/exchange/exchange_home.php");
	}
	elseif($fetch['Usertype']==4)   
		{
		$_SESSION["email"]=$Email;	// setting username as session variable 
		$_SESSION["login_id"]=$fetch['login_id'];
	header("location:../Companyhome2/company/company_home.php");
	}
}
      else
{
echo "<script>alert('invalid credentials!')</script>";
}


    }	
  else{
     echo '<script> alert("Unauthorized access!!!");</script>';
  }
}
?>




              