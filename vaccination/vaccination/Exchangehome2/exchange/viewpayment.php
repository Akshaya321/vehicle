<?php 
include 'header.php';
?> 
<!-- End Navbar -->
      
                   <h4 >View Payment Details</h4>
                 <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
               <table>
                        
                        <th>
                        Name
                        </th>
                        
                        
                        <th>
                      Phone Number
                        </th>
                        <th>
                      Place
                        </th>
                        <th>
                     House name
                        </th>
                        <th>
                      Account Number
                        </th>
                       
                       
                        <th>
                      Experience
                        </th>
                        <th>
                      Date
                        </th>
                        <th>
                      Amount
                        </th>
                      <th>
                      Operation
                        </th>
                      
                    

                      </thead>
                      <?php
                      

                      include "../../dbcon.php";
                      
$result = mysqli_query($con, "SELECT * from  tbl_payment as p JOIN userrregistration as u where p.Userid=u.Userid"); 
?>
<body>
    <?php
while($res = mysqli_fetch_array($result)){

 ?>
<tr>
<td><?php echo $res['Name']; ?>
</td>


<td><?php echo $res['Phoneno']; ?>
</td>
<td><?php echo $res['Place']; ?>
</td>
<td><?php echo $res['Housename']; ?>
</td>
<td><?php echo $res['Accno']; ?>
</td>


<td><?php echo $res['Experience']; ?>
</td>
<td><?php echo $res['Date']; ?>
</td>
<td><?php echo $res['Amount']; ?>
</td>




 <!-- <td> <a href="../Addnotification.php?uid=<?php echo $res["Userid"]; ?>" class="Add_btn">ADD</a>
</td> -->
<td>
    <a href="payment.php?uid=<?php echo $res["Userid"]; ?>">Approve</a>
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
