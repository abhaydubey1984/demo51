<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function change(data)
		{
			//alert(document.getElementById("s").item(1).cells);
			document.getElementById("s").innerHTML="<input type='text' onchange='myfunn();' />";
		}
		function myfun()
		{
			document.getElementById("s").innerHTML="hello";
		}
		function myfunn()
		{
			document.write("data");	
		}
	</script>
</head>
<body>
<form>
<table>
	<tr>
		<td id="s" onClick="change(this.value);">hello</td>
	</tr>
</table>
</form>
</body>
</html>