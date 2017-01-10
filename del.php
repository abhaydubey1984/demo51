<?php
	$conn=new mysqli("localhost","root","","demo51");
	$id=$_REQUEST['id'];
	$sql=$conn->query("delete from test where id='$id'");
	header('location:display.php');
?>
