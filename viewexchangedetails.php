<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
body  {
  background-image: url("images/p.jpg");
 <!-- background-repeat: no-repeat, repeat;-->
  background-image: linear-gradient(red, yellow);

  background-color: #cccccc;
}
</style>
</head>
<?php
include "../dbcon.php";
$results=mysqli_query($con,"SELECT * FROM  addexchange as ad,postoffice as po,taluk as t,district as d where ad.postid=po.postid and po.talukid=t.talukid and d.districtid=t.districtid ");
?>
<body>
<table border="1"
	<tr>
		<td>Employment name </td>
		<td>postname</td>
		<td>Taluk Name</td>
		<td>District</td>
		<td>Phoneno</td>
		<td>Email</td>
		<td>Mainbranch </td>
		<!--<td>Officer</td>-->
		
	
	</tr>
<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
	<td><?php echo $row["Employmentname"]; ?></td>
	<td><?php echo $row["postname"]; ?></td>
	<td><?php echo $row["talukname"]; ?></td>
	<td><?php echo $row["districtname"]; ?></td>
	<td><?php echo $row["Phoneno"]; ?></td>
	<td><?php echo $row["Email"]; ?></td>
	<td><?php echo $row["Mainbranch"]; ?></td>
	<!--<td><?php echo $row["Officer"]; ?></td>-->
	
	
</tr>
<?php
}
?>
</table>
</body>
</html>

