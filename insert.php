<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$conn=new mysqli("localhost","root","","demo51");
	if(isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];
		$address=$_REQUEST['address'];
		$city=$_REQUEST['city'];
		$phone=$_REQUEST['phone'];
		$sql=$conn->query("insert into test(name,address,city,phone) values('$name','$address','$city','$phone')");
		echo $sql;
		header('location:display.php');
	}
?>

<form name="myform" onsubmit="myfunction()">
<table>
	<tr>
		<td>
			Enter Name :
		</td>
		<td>
			<input type="text" name="name" required>
		</td>
	</tr>
	<tr>
		<td>
			Enter Address :
		</td>
		<td>
			<input type="text" name="address" required>
		</td>
	</tr>
	<tr>
		<td>
			Enter City
		</td>
		<td>
			<input type="text" name="city" required>
		</td>
	</tr>
	<tr>
		<td>
			Enter Phone Number
		</td>
		<td>
			<input type="text" name="phone" required>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit" value="Submit">
			<input type="button" name="Getdata" onclick="getdataa('');" value="Getdata">
		</td>
	</tr>
</table>

</form> 

</body>
</html>