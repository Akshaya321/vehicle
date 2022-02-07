<?php
session_start();
//include '../query.php';
$uid=$_SESSION['login_id'];
include 'config.php';
CheckLogout();
include 'header.php';
 
?>
<style>
body{
    font-family: Arial;
    width: 1362px;
	background-color:#00CC99;
}
</style>

 <link rel="stylesheet" href="css/table-style.css">  
<div class="agile-grids">	
				<!-- tables -->
			<center>
				<div class="agile-tables">
					<div style="width:80%;">
					  <center><h2>Responses</h2></center>
					    <table id="table">
						<thead>
						  <tr>
							<th>Sl.No</th>
							<th>User Name</th>
							<th>Email</th>
							<th>Feedback</th>
							
						  </tr>
						</thead>
						 <?php
  
  $qry="select * from tbl_feedback";
  $res=setData($qry);
  $c=1;
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $c;?></td>
    <td><?php echo $row['name'];?>&nbsp;</td>
	<td><?php echo $row['email'];?>&nbsp;</td>
	<td><?php echo $row['text'];?>&nbsp;</td>
	
	  
  </tr>
  <?php $c++;
  }
  ?>
						</table>
						</div>
						</div>
						</div>
	<?php
	include 'footer.php';
	?>					