<?php
	$conn=new mysqli("localhost","root","","demo51");
	
	$id=$_REQUEST['id'];
	$sql=$conn->query("select * from test where name like '%$id%' or city like '%$id%' or address like '%$id%'");
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
