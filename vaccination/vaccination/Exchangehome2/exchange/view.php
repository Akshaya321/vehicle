
<?php
session_start();
include 'config.php';
CheckLogout();
include '../../dbcon.php';

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
<br><br><br><br><br><br><br><br>
<h4></h4>

<table>
  
  <tr>
    <th>Company Name</th>
    <th>Company Sector</th>
    <th>Register Number</th>
    <th>Location</th>
    <th>Postoffice</th>
    <th>Taluk</th>
    <th>District</th>
    <th>Phone</th>
    <th>Operations</th>
    
  </tr>
  
  
      <?php
include "../../dbcon.php";
$results=mysqli_query($con,"SELECT * FROM  companyreg as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid ");
?>

<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
      <td><?php echo $row["Companyname"]; ?></td>
	<td><?php echo $row["Sector"]; ?></td>
	<td><?php echo $row["Regno"]; ?></td>
	<td><?php echo $row["Location"]; ?></td>
	<td><?php echo $row["postname"]; ?></td>
	<td><?php echo $row["talukname"]; ?></td>
	<td><?php echo $row["districtname"]; ?></td>
	<td><?php echo $row["Phone"]; ?></td>
	<td> <a href="companyredit.php?uid=<?php echo $row['comregid']; ?>" >Edit</a>
</td>
<td>
    <a href="deletecompany.php?uid=<?php echo $row['comregid']; ?>" >Delete</a>
</td>
	
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

     