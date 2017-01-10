<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function getcountry()
		{
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200)
				{
					var res=JSON.parse(this.responseText);
					var op="<option>--Select--</option>";
					for(i=0;i<res.length;i++)
					{
						op=op+"<option value="+res[i].c_id+">"+res[i].cname+"</option>";
					}
					document.getElementById("country").innerHTML=op;
				}
			};
			xhttp.open("GET", "http://192.168.200.54/demo51/country.php", true);
  			xhttp.send();
		}
		function getstate(c_id)
		{
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
			var op="<option>--Select--</option>";	
				if(this.readyState == 4 && this.status == 200)
				{
					var res=JSON.parse(this.responseText);
					for(i=0;i<res.length;i++)
					{
						op=op+"<option value="+res[i].s_id+">"+res[i].sname+"</option>";
					}
					document.getElementById("state").innerHTML=op;
				}
			};
			xhttp.open("GET", "http://192.168.200.54/demo51/state.php?c_id="+c_id, true);
  			xhttp.send();
		}
		function getcity(s_id)
		{
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
			var op="<option>--Select--</option>";	
				if(this.readyState == 4 && this.status == 200)
				{
					var res=JSON.parse(this.responseText);
					for(i=0;i<res.length;i++)
					{
						op=op+"<option value="+res[i].city_id+">"+res[i].cityname+"</option>";
					}
					document.getElementById("city").innerHTML=op;
				}
			};
			xhttp.open("GET", "http://192.168.200.54/demo51/city.php?s_id="+s_id, true);
  			xhttp.send();
		}
	</script>
</head>
<body onload="getcountry()">
<form>
<select id="country" name="country" onchange="getstate(this.value)">
	<option>--Select--</option>
</select>
<select id="state" onchange="getcity(this.value)">
	<option>--Select--</option>
</select>
<select id="city">
	<option>--Select--</option>
</select>
</form>
</body>
</html>