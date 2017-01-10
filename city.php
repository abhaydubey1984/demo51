<?php
	$conn=new mysqli("localhost","root","","demo51");
	$s_id=$_REQUEST['s_id'];
	$sql=$conn->query("select * from city where s_id=$s_id");
	$arr=array();
	while($dataa=$sql->fetch_array())
	{
		$arr[]=$dataa;	
	}
	echo json_encode($arr);
	
?>
