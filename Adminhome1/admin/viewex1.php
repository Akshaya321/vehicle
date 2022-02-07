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
     <th>
                        Name
                        </th>
                        <th>
                   Phone no
                        </th>
                        <th>
                   Place
                        </th>
                        <th>
                     Vehicle type
                        </th>
                        <th>
                     Vehicle name
                        </th>
                        <th>
                   Vehicle number
                        </th>
                       <th>
                        Vehicle model
                         </th>
                        <th>
                      Card no
                        </th>
                        <th>
                      Date
                        </th>
                        <th>
                     Cvv no
                        </th>
                        <th>
                      Amount
                        </th>
                      
                    

    
  </tr>
                     
                     <?php
include "../../dbcon.php";
$results = mysqli_query($con, "SELECT * from  payment as p JOIN userrregistration as u where p.Userid=u.Userid"); 
?>
<body>

	<tr>
		<!-- <td>Employment name </td>
		<td>Name</td>
		<td>DOB</td>
		<td>Gender</td>
		<td>Phoneno</td>
		<td>Email</td>
		<td>Mainbranch </td> -->
		<!--<td>Officer</td>-->
		
	
	</tr>
<?php
while($row=mysqli_fetch_array($results))
{
?>
<tr>
	<td><?php echo $row["Name"]; ?></td>
	<td><?php echo $row["Phoneno"]; ?></td>
	<td><?php echo $row["Place"]; ?></td>
	<td><?php echo $row["Vehicletype"]; ?></td>
	<td><?php echo $row["Vehiclename"]; ?></td>
	<td><?php echo $row["Vehiclenumber"]; ?></td>
        <td><?php echo $row["Vehiclemodel"]; ?></td>
	<td><?php echo $row["Cardno"]; ?></td>
	<td><?php echo $row["Expirationdate"]; ?></td>
<td><?php echo $row["Cvvno"]; ?></td>
	<td><?php echo $row["Amount"]; ?></td>
	
	
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
