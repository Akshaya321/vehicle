<?php
//session_start();

class Dbcon
{
private function getConnection()
{
$con=mysqli_connect("localhost","root","","employment"); 
return $con;
}
public function closeCon()
{
mysqli_close($con);
}
public function submitQuery($qry)
{
$result=0;
$con=$this->getConnection();
$result=mysqli_query($con,$qry);
return $result;
}
}
?>