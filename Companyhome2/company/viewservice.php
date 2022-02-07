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
    <th> Name</th>
    <th>Phone number</th>
    <th>Place</th>
    
    <th>Services</th>
    <th>Operations</th>
    
  </tr>
  
  
      <?php
include "../../dbcon.php";
$results = mysqli_query($con, "SELECT * from  services as p JOIN userrregistration as u where p.Userid=u.Userid"); 
?>

<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
      <td><?php echo $row["Name"]; ?></td>
	<td><?php echo $row["Phoneno"]; ?></td>
	<td><?php echo $row["Place"]; ?></td>
	
	<td><?php echo $row["Services"]; ?></td>
	<td> <a href="apprej.php" >Approve/Reject</a>
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

     