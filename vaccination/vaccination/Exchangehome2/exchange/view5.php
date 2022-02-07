<?php
session_start();
include 'config.php';
CheckLogout();
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

<h4></h4>

<table>
  
  <tr>
    <th>Title</th>
    <th>Description</th>
    <th>Date</th>
   
    
  </tr>
                      <?php
                      

                      
                      include "../../dbcon.php";
                      $results=mysqli_query($con,"SELECT * FROM  tbl_notification 
                      where not_to='242' ");
                      ?>
                      <body>
                      
                           <!-- <tr>
                                  <td>Title </td>
                              <td>Description</td>
                              <td>Date</td> 
                              
                                 <td>EDIT</td>
                                  <td>DELETE</td>
                               
                          
                          </tr>  -->
                      <?php
                      while($row=mysqli_fetch_array($results))
                      {
                      ?>
                      <tr>
                            <td><?php echo $row["Title"]; ?></td>
                          <td><?php echo $row["Description"]; ?></td>
                          <td><?php echo $row["Date"]; ?></td>
<!-- <td> <a href="companyredit.php?uid=<?php echo $res["comregid"]; ?>" class="edit_btn">Edit</a>
</td>
<td>
    <a href="deletecompany.php?uid=<?php echo $res["comregid"]; ?>" class="del_btn">Delete</a>
</td> -->
</tr>
<?php }
?>
</table>

</body>
<?php
include 'footer.php';
?>
</html>
                   
                  