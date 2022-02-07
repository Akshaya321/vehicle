
<?php
session_start();
$id = $_SESSION['login_id'];
include 'config.php';
CheckLogout();
include 'header.php';
?>  



<form id="f1" method="post" enctype="multipart/form-data" action="updateproduct.php">
<?php 

//$qry="select * from products,tbl_category where products.catid=tbl_category.catid and products.id='$id' ";
//$qry="select * from tbl_product,tbl_category where tbl_product.catid=tbl_category.catid and tbl_product.productid='$catid' ";
 $qry="select * from companyreg where comregid=$id";
  $res=setData($qry);
  while($rest=mysqli_fetch_array($res))
  {
$Companyname=$rest['Companyname'];
                   $Sector=$rest['Sector'];
                   $Regno=$rest['Regno'];
                   $Location=$rest['Location'];          
                   $Phone=$rest['Phone'];


?>
<div>
                  <form  method="post" style="margin-left:300px;" enctype="multipart/form-data"  action=""><br>
                <table class="table">
				
           <!-- <tr><td><input type="hidden" value="<?php echo $Companyname;?>" name="id"></label></td></tr>                                       -->
           <tr><td><label for="item">Companyname</label></td>
           <td><input type="text" id="item" name="Companyname"  value="<?php echo $rest['Companyname'];?>"   style="height:25px;" /><br /> </td></tr>
         
           <tr><td><label for="item">Sector</label></td>
         <td><input type="text" id="item" name="Sector"  value="<?php echo $Sector; ?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Regno</label></td>
         <td><input type="text" id="item" name="Regno"  value="<?php echo $Regno;?>"   style="height:25px;" /><br /> </td></tr>
      
         <tr><td><label for="item">Location</label></td>
         
        
         <td><input type="text" id="item" name="Location"  value="<?php echo $Location;?>"   style="height:25px;" /><br /> </td></tr>
         <tr><td><label for="item">Phone</label></td>
         <td><input type="text" id="item" name="Phone"  value="<?php echo $Phone;?>"   style="height:25px;" /><br /> </td></tr>
         
                                     
  
                                     
        
        <center>
            <tr><td><input type="submit" style="background-color:yellowgreen;color:#FFFFFF;width: 100px;height:30px;" name="submit" value="Update" onClick="return valid()"></td></tr>
                                    </center>
           </table>
                                                    </form>
                           </div>                 
            
                                        
    </center>
        
    
<?php }?>
</form>
<?php
include 'footer.php';
?>
            
  
 
  
  