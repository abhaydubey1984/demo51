<?php
	$conn=new mysqli("localhost","root","","demo51");
	$tblname=$_REQUEST['tblname'];
	$dbname=$_REQUEST['dbname'];
	$sql=$conn->query("select COLUMN_NAME from information_schema.columns where table_schema = $dbname and table_name = $tblname");
	$arr=array();
	while($dataa=$sql->fetch_array())
	{
		$arr[]=$dataa;
		// /echo $dataa[1];
	}
	echo json_encode($arr);
	
?>
