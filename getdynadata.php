<?php
	$dbname=$_REQUEST['dbname'];
	$tblname=$_REQUEST['tblname'];
	$conn=new mysqli("localhost","root","",$dbname);
	$sql=$conn->query(" use ".$dbname);
	$sql=$conn->query("select * from ".$tblname);
	$arr=array();
	while($dataa=$sql->fetch_array())
	{
		$arr[]=$dataa;
	}
	echo json_encode($arr);
	
?>
