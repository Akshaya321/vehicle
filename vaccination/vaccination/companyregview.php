<?php

include "../dbcon.php";
 ?>
<html><head>
<style>
    
    
    #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border: 1px rgb;
  border-color: red;
  width: 50px;
  
  
}

#customers th, #customers th {
  border: 1px rgb;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    width: 10px;
  padding-top: 40px;
  padding-bottom: 12px;
  text-align: left;
  background-color: red;
  color: white;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
.msg {
    margin: 100px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
table {
    margin-top: 100px;
    border: 1px rgb;
    border-color: green;
    margin-left: 100px;
    text-align: center;
  width:50%;
}
table, th, tr {
   border: buttonshadow;
    height: 30px;
    padding: 2px;

}
th, tr {
  padding: 15px;
  text-align: center;
}
table#customers tr:nth-child(even) {
  background-color: #eee;
  background: #F5F5F5;
}
table#customers tr:nth-child(odd) {
 background-color: #fff;
}
table#customers th {
  background-color: red;
  color: greenyellow;
}
</style>
</head>
<table border=2 id="customers" >
<tr>
            
<td>Company name </td>
		<td>Company Sector</td>
		<td>Register Number</td>
		<td>Location</td>
		<td>postname</td>
		<td>Taluk Name</td>
		<td>District</td>
		<td>Phone Number</td>
            
		
             <th>EDIT</th>
             <th>DELETE</th>
</tr>

<?php
$result = mysqli_query($con, "SELECT * from companyreg"); 

while($res = mysqli_fetch_array($result)){

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

<td> <a href="companyredit.php?uid=<?php echo $res["comregid"]; ?>" class="edit_btn">Edit</a>
</td>
<td>
    <a href="deletecompany.php?uid=<?php echo $res["comregid"]; ?>" class="del_btn">Delete</a>
</td>
</tr>
<?php }
?>
</table>
</html>