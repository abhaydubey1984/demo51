<?php
	$conn=new mysqli("localhost","root","","demo51");
	
	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$city=$_REQUEST['city'];
	$phone=$_REQUEST['phone'];
	$sql=$conn->query("update test set name='$name' and city='$city' and address='$address' and phone='$phone' where id=$id");
	//$row=$sql->fetch_array();
	//$json_data=json_encode($row);
	
	
?>
