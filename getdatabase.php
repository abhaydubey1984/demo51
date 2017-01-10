<?php
	$conn=new mysqli("localhost","root","","demo51");
	$sql=$conn->query("SHOW DATABASES");
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
