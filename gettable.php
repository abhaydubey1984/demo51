<?php
	$conn=new mysqli("localhost","root","","demo51");
	$dbname=$_REQUEST['dbname'];
	$sql=$conn->query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA='$dbname'");
	//$row=$sql->fetch_array();
	//$json_data=json_encode($row);
	$arr=array();
	while($dataa=$sql->fetch_array())
	{
		$arr[]=$dataa;
		// /echo $dataa[1];
	}
	echo json_encode($arr);
	
?>
