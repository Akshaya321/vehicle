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
  width: 50%;
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

<h4></h4>

<table >
  
  <tr>
    <th>Name</th>

    <th>Gender</th>
    
    <th>Place</th>
    
    <th>Photo</th>
    <th>Position Name</th>
    <th>Experience</th>
    <th>Job Description</th>
    <th>Job Location</th>
    
    <th>Qualification</th>
   
    
  </tr>
					  <?php
                      

                      include "../../dbcon.php";
                      
$result = mysqli_query($con, "SELECT * from tbl_shortlist as s, userrregistration as u,addvacancy as v where s.Userid=u.Userid and s.vacancyid=v.vacancyid"); 

while($res = mysqli_fetch_array($result)){

 ?>
<tr>
<td><?php echo $res['Name']; ?>
</td>

<td><?php echo $res['Gender']; ?>
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
<td><?php echo $res['Joblocation']; ?>
</td>

<td><?php echo $res['Qualification']; ?>
</td>



 <!-- <td> <a href="../Addnotification.php?uid=<?php echo $res["Userid"]; ?>" class="Add_btn">ADD</a>
</td> -->
<td>
    <a href="shortlist.php?uid=<?php echo $res["comregid"]; ?>" class="del_btn">shorlist</a>
</td>  
<!-- <td>
    <a href="deletecompany.php?uid=<?php echo $res["comregid"]; ?>" class="del_btn">Delete</a>
</td>  -->
</tr>
<?php
}
?>
</table>

</body>
<?php
include 'footer.php';
?>
</html>
                   
                    