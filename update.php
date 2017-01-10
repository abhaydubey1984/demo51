<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function myfun(idd,ser)
		{
			//alert(id);
			var xhttp = new XMLHttpRequest();
		    xhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) 
				{
		     //document.getElementById("demo").innerHTML = this.responseText;
				    var res=JSON.parse(this.responseText);
				    var table = "<table border=1>";
				    for(i=0;i<res.length;i++)
				    {
				     	if(res[i].id==idd)
				     	{
				     		//alert(res[i].name);
				     		document.getElementById("name").value=res[i].name;
				     		document.getElementById("address").value=res[i].address;
				     		document.getElementById("city").value=res[i].city;
				     		document.getElementById("phone").value=res[i].phone;
				     	}
				     	// document.getElementById("demo").innerHTML = res[i].name;
				     	//document.getElementById("demo").innerHTML = "</td>";
				    }
		  		}
		  	};
		  	xhttp.open("GET", "http://localhost/demo51/getdataa.php?id="+ser, true);
		  	xhttp.send();
	
		}

</script>

</head>
<?php
$id=$_REQUEST['id'];
// echo $id;
?>
<body onload="myfun(<?php echo $id; ?>,'');">
<?php
$conn=new mysqli("localhost","root","","demo51");

if(isset($_REQUEST['submit']))
{

	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$city=$_REQUEST['city'];
	$phone=$_REQUEST['phone'];
	// echo $name;
	$str="update test set name='$name',city='$city',address='$address', phone='$phone' where id=$id";
	// die($str);
	$sql=$conn->query($str);
	header('location:display.php');
	}
?>
<form name="myform" method="post">
<table>
	<tr>
		<td>
			Enter Name :
		</td>
		<td>
			<input type="text" name="name" id="name">
		</td>
	</tr>
	<tr>
		<td>
			Enter Address :
		</td>
		<td>
			<input type="text" name="address" id="address">
		</td>
	</tr>
	<tr>
		<td>
			Enter City
		</td>
		<td>
			<input type="text" name="city" id="city">
		</td>
	</tr>
	<tr>
		<td>
			Enter Phone Number
		</td>
		<td>
			<input type="text" name="phone" id="phone">
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="submit" value="Submit">
		</td>
	</tr>
</table>

</form> 
</body>
</html>