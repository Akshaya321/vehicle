
       <?php
session_start();
include 'config.php';
CheckLogout();
?>
	   <?php
include 'header.php';
?>  
        <!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 5px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<br><br><br><br>

<h4></h4>

<table>
  
  <tr>
    <th>Position Name</th>
    <th>Experience</th>
    <th>Job Description</th>
    <th>Job Location</th>
    <th>Venue</th>
    <th>Date</th>
    <th>Qualification</th>
    
  </tr>
                      <?php
include "../../dbcon.php";
 $results=mysqli_query($con,"SELECT * FROM  addvacancy ");
// $results=mysqli_query($con,"SELECT * FROM  addvacancy as ad,companyreg as co where ad.comregid=co.comregid ");
?>
<body>

      
		
	
	
<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
      <td><?php echo $row["Positionname"]; ?></td>
	<td><?php echo $row["Experience"]; ?></td>
	<td><?php echo $row["Jobdescription"]; ?></td>
	<td><?php echo $row["Joblocation"]; ?></td>
	<td><?php echo $row["Venue"]; ?></td>
	<td><?php echo $row["Date"]; ?></td>
	<td><?php echo $row["Qualification"]; ?></td>
	<!-- <td><?php echo $row["Phone"]; ?></td>-->
	<td> <a href="Apply.php?uid=<?php echo $row['vacancyid']; ?>" >APPLY</a>
</td>
<!-- <td>
    <a href="deletecompany.php?uid=<?php echo $row['comregid']; ?>" >Delete</a>
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
                   