<?php
	include '../../dbcon.php';
	function setData($qry)
	{
		$obj=new Dbcon();
		$res=$obj->submitQuery($qry);
		return $res;
	}
?>