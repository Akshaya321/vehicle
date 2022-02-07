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
$results=mysqli_query($con,"SELECT * FROM  tbl_notification ");
?>
<body>
<table border="1"
	<tr>
            <td>Title </td>
		<td>Description</td>
		<td>Date</td>
		
            <!-- <td>EDIT</td>
            <td>DELETE</td> -->
		
	
	</tr>
<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
      <td><?php echo $row["Title"]; ?></td>
	<td><?php echo $row["Description"]; ?></td>
	<td><?php echo $row["Date"]; ?></td>
	
	<!-- <td> <a href="companyredit.php?uid=<?php echo $row['comregid']; ?>" >Edit</a>
</td>
<td>
    <a href="deletecompany.php?uid=<?php echo $row['comregid']; ?>" >Delete</a>
</td> -->
	
</tr>
<?php
}
?>
</table>
</body>
</html>

