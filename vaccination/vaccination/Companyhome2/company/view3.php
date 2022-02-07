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
 

<h4></h4>

<table>
  
  <tr>
    <th>Name</th>
    <th>DOB</th>
    <th>Gender</th>
    <th>Phone Number</th>
    <th>Place</th>
    <th>Housename</th>
    <th>Covid patient</th>
<th>Operations</th>
    
  </tr>
  
  
  
  
    
  
  
         
         <?php
                      

                      include "../../dbcon.php";
                      
$result = mysqli_query($con, "SELECT * from userrregistration"); 

while($res = mysqli_fetch_array($result)){

 ?>
<tr>
<td><?php echo $res['Name']; ?>
</td>
<td><?php echo $res['DOB']; ?>
</td>
<td><?php echo $res['Gender']; ?>
</td>
<td><?php echo $res['Phoneno']; ?>
</td>
<td><?php echo $res['Place']; ?>
</td>
<td><?php echo $res['Housename']; ?>
</td>
<td><?php echo $res['Covid']; ?>
</td>


 <td><a href="userapprove.php?id='<?php echo $rest['Userid'] ?>'">APPROVE</a></td>
<td><a href="deleteuser.php?id='<?php echo $rest['Userid'] ?>'">REJECT</a></td>
 
</td>  
</tr>
<?php }
?>
</table>

</body>
<?php
include 'footer.php';
?>
</html>
                  