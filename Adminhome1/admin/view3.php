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
   
    <th>Phone Number</th>
    <th>Place</th>
    <th>Vehicle type</th>
    <th>Vehicle Name</th>
<th>Vehicle Number</th>
<th>Vehicle Model</th>
    
    
  </tr>
  
  
  
  
    
  
  
         
         <?php
                      

                      include "../../dbcon.php";
                      
$result = mysqli_query($con, "SELECT * from userrregistration"); 

while($res = mysqli_fetch_array($result)){

 ?>
<tr>
<td><?php echo $res['Name']; ?>
</td>

<td><?php echo $res['Phoneno']; ?>
</td>
<td><?php echo $res['Place']; ?>
</td>
<td><?php echo $res['Vehicletype']; ?>
</td>
<td><?php echo $res['Vehiclename']; ?>
</td>
<td><?php echo $res['Vehiclenumber']; ?>
</td>
<td><?php echo $res['Vehiclemodel']; ?>
</td>




<!-- <td>
    <a href="deletecompany.php?uid=<?php echo $res["comregid"]; ?>" class="del_btn">Delete</a>
</td>  -->
</tr>
<?php }
?>
</table>

</body>
<?php
include 'footer.php';
?>
</html>
                  