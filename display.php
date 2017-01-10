<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
function displaydata(ser)
{
	//alert("hello");
	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
	if (this.readyState == 4 && this.status == 200) {
     //document.getElementById("demo").innerHTML = this.responseText;
    var res=JSON.parse(this.responseText);
    var table = "<table border=1>";
    table+="<th>Name</th><th>Address</th><th>City</th><th>Phone Number</th><th colspan='2'>Action</th>"
    for(i=0;i<res.length;i++)
    {
     	table = table + "<tr>";
     	table = table + "<td>" + res[i].name + "</td>";
     	table = table + "<td>" + res[i].address + "</td>";
     	table = table + "<td>" + res[i].city + "</td>";
     	table = table + "<td>" + res[i].phone + "</td>";
     	table = table + "<td>" + "<a href='update.php?id="+res[i].id+"'>Update</a>" + "</td>";
     	table = table + "<td>" +"<a href='del.php?id="+res[i].id+"' onClick='return confirm();'>Delete</a>"+"</td>";
     	table = table + "</tr>";
     	// document.getElementById("demo").innerHTML = res[i].name;
     	//document.getElementById("demo").innerHTML = "</td>";
     }
     table = table + "</table>";
     document.getElementById("data").innerHTML=table;
 	}
  	};
  	xhttp.open("GET", "http://192.168.200.54/demo51/getdataa.php?id="+ser, true);
  	xhttp.send();
		//document.getElementById("data").innerHTML=ser;
}	</script>
</head>
<body onload="displaydata('')">
<form>
<input type="text" name="ser" onkeyup="displaydata(this.value)">
</form>
<a href="insert.php">Insert</a>
<center><div id="data"></center>
</div>
</body>
</html>