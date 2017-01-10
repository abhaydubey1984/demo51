<?php
	$conn=new mysqli("localhost","root","","demo51");
	$sql=$conn->query("select * from test");
	//$row=$sql->fetch_array();
	//$json_data=json_encode($row);
	//var_dump($sql);
	$arr=array();
	while($dataa=$sql->fetch_array())
	{
		$arr[]=$dataa;
	}
	echo json_encode($arr);
	
?>
