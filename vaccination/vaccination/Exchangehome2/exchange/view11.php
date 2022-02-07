<?php
session_start();
include 'config.php';
CheckLogout();
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 10%;
}

td, th {
  border: 10px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<br><br><br>
<h4></h4>

<table style="width:500px;">
  
  <tr>
    <th>Name</th>
    <th>Gender</th>
    <th>Phone Number</th>
    <th>Place</th>
    <th>Photo</th>
    <th>Position Name</th>
    <th>Experience</th>
    <th>Job Description</th>
   
    
    <th>Qualification</th>
	 <th>Operation</th>
   
    
  </tr>
                      <?php
                      

                      include "../../dbcon.php";
                      
$result = mysqli_query($con, "SELECT * from tbl_Application as s, userrregistration as u,addvacancy as v where s.Userid=u.Userid and s.vacancyid=v.vacancyid"); 

while($res = mysqli_fetch_array($result)){

 ?>
<tr>
<td><?php echo $res['Name']; ?>
</td>

<td><?php echo $res['Gender']; ?>
</td>
<td><?php echo $res['Phoneno']; ?>
</td>
<td><?php echo $res['Place']; ?>
</td>



<td><img src="../../<?php echo $res['Photo']; ?>" width="100px" height="100px"/>
</td>
<td><?php echo $res['Positionname']; ?>
</td>
<td><?php echo $res['Experience']; ?>
</td>
<td><?php echo $res['Jobdescription']; ?>
</td>


<td><?php echo $res['Qualification']; ?>
</td>



 <!-- <td> <a href="../Addnotification.php?uid=<?php echo $res["Userid"]; ?>" class="Add_btn">ADD</a>
</td> -->
 <td>
    <a href="view10.php?uid=<?php echo $res["Apply_id"]; ?>" class="del_btn">Approve</a>
</td>  
 <!--<td>
    <a href="view11.php?uid=<?php echo $res["comregid"]; ?>" class="del_btn">Reject</a>
</td> --> 

</tr>
<?php }
?>
</table>

</body>
<?php
include 'footer.php';
?>
</html>
                    