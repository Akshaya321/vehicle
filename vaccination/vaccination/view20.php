<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 110%;
}

td, th {
  border: 1px solid #dddddd;
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
    <th>Account Number</th>
    <th>Registration Date</th>
    <th>Photo</th>
  </tr>
  
  
  
  
    
  
  
         
         <?php
                      

                      include "../dbcon.php";
                      
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
<td><?php echo $res['Accno']; ?>
</td>
<td><?php echo $res['Regdate']; ?>
</td>
<td><img src="../reg/<?php echo $res['Photo']; ?>" width="150px" height="150px"/>
</td>



<!-- <td>
    <a href="deletecompany.php?uid=<?php echo $res["comregid"]; ?>" class="del_btn">Delete</a>
</td>  -->
</tr>
<?php }
?>
</table>

</body>
</html>
                  