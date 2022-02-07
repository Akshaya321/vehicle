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
     while ($rest=mysqli_fetch_array($a)) {
         $Name=$rest['Name'];
         $Phoneno=$rest['Phoneno'];
         $Place=$rest['Place'];
         $Housename=$rest['Housename'];
         $Accno=$rest['Accno'];
        //  $Amount=$rest['Amount'];
        //  $Date=$rest['Date'];
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
         // $IDProof=$rest['IDProof']; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
<center>
<h2>Payment Form</h2></center>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Name</label>
            <input type="text" id="Name" name="Name"value="<?php echo $Name; ?>" disabled>
            <label for="fname"><i class="fa fa-user"></i> Phonenumber</label>
            <input type="text" id="Phoneno" name="Phoneno"value="<?php echo $Phoneno; ?>" disabled>
            <label for="fname"><i class="fa fa-user"></i> Place</label>
            <input type="text" id="Place" name="Place"value="<?php echo $Place; ?>" disabled>
            <label for="fname"><i class="fa fa-user"></i>Housename</label>
            <input type="text" id="Housename" name="Housename" value="<?php echo $Housename; ?>"disabled>
            <label for="fname"><i class="fa fa-user"></i>Accountnumber</label>
            <input type="text" id="Accno" name="Accno"value="<?php echo $Accno; ?>" disabled>
         
            
            <label for="Amount"><i class="fa fa-envelope"></i> Amount</label>
            <input type="text" id="Amount" name="Amount" >
            <label for="Date"><i class="fa fa-envelope"></i> Date</label>
            <input type="date" id="Date" name="Date" >
            
            <!-- <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div> -->
          </div>


        </div>
        
        <input type="submit" name="submit" value="Continue to checkout" class="btn">
        <?php
     }
        ?>
      </form>
    </div>
  </div>
  
</div>
<?php
if (isset($_POST['submit'])) {
    // $k = $_POST["Userid"];
    //  $c = $_POST["course"];
    //  $e = $_POST["institution"];
     echo $f = $_POST['Amount'];
     echo $j = $_POST['Date'];
 
      $sql2 = "INSERT INTO `tbl_payment`  VALUES (null,$id,'$f','$j')";
 
     $res = mysqli_query($con, $sql2);
 }
 ?>


</body>
</html>
