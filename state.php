<?php
	$conn=new mysqli("localhost","root","","demo51");
	$c_id=$_REQUEST['c_id'];
	$sql=$conn->query("select * from state where c_id=$c_id");
	//echo var_dump($sql);
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
