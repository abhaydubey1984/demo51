<html>
<head>
<script type="text/javascript">

function getdataa(ser)
{
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
	if (this.readyState == 4 && this.status == 200) {
     //document.getElementById("demo").innerHTML = this.responseText;
    var res=JSON.parse(this.responseText);
    var table = "<table border=1>";
    for(i=0;i<res.length;i++)
    {
     	table = table + "<tr>";
     	table = table + "<td onClick='ctext("+res[i].id+")'>" + res[i].name + "</td>";
     	table = table + "<td>" + res[i].address + "</td>";
     	table = table + "<td>" + res[i].city + "</td>";
     	table = table + "<td>" + res[i].phone + "</td>";
     	table = table + "</tr>";
     	// document.getElementById("demo").innerHTML = res[i].name;
     	//document.getElementById("demo").innerHTML = "</td>";
     }
     table = table + "</table>";
     document.getElementById("data").innerHTML=table;
 	}
  	};
  	xhttp.open("GET", "http://localhost/demo51/getdataa.php?id="+ser, true);
  	xhttp.send();
		//document.getElementById("data").innerHTML=ser;
}
function ctext(id)
{
	//alert("hello"+id);
	document.getElementById("namee").innerHTML="<input type='text' onchange='myfunn("+id+","+this.value+");'/>";
}
function myfunn(id,data)
{
	alert("hello");
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
	if (this.readyState == 4 && this.status == 200) {
     //document.getElementById("demo").innerHTML = this.responseText;
     //var res=JSON.parse(this.responseText);
    
    // document.getElementById("data").innerHTML=table;
 	}
  	};
  	xhttp.open("GET", "http://localhost/demo51/updatename.php?id="+id+" && name="+data , true);
  	xhttp.send();
}
</script>
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
	}
?>

<form name="myform" onsubmit="myfunction()">
<table>
	<tr>
		<td>
			Enter Name :
		</td>
		<td>
			<input type="text" name="name" >
		</td>
	</tr>
	<tr>
		<td>
			Enter Address :
		</td>
		<td>
			<input type="text" name="address">
		</td>
	</tr>
	<tr>
		<td>
			Enter City
		</td>
		<td>
			<input type="text" name="city">
		</td>
	</tr>
	<tr>
		<td>
			Enter Phone Number
		</td>
		<td>
			<input type="text" name="phone">
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
<div id="data">

</div>
<div id="serach">
	<input type="text" onkeyup="getdataa(this.value)">
</div>
</body>
</html>