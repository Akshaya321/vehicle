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
    <th>Sl No</th>
    <th>Service</th>
    
    <th>Operations</th>
    
  </tr>
  
  
      <?php
include "../../dbcon.php";
$results=mysqli_query($con,"SELECT * FROM  service ");
?>

<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
      <td><?php echo $row["sid"]; ?></td>
	<td><?php echo $row["service"]; ?></td>
	
	<td> <a href="Apply.php" >Request For Service</a>
</td>
<!--<td>
    <a href="Apply.php?uid=<?php echo $row['comregid']; ?>" >Delete</a>
</td>-->
	
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

     