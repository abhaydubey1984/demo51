<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="myscript.js">
		
	</script>
	<style type="text/css">
		.drp
		{
			color: gray;
			padding: 5px;
			font-size: 14px;
			margin: 2px;
			border-radius: 3px;
		}
		.dis table
		{
			text-align: left;
		}
		.dis
		{
			border: 20px;
		}
		.dis table tr th
		{
			font-size:20px;
			padding: 10px;
			margin: 5px;
		}
		.dis table tr td
		{
			font-size:20px;
			padding: 5px;
			margin: 2px;
		}
	</style>
</head>
<body onload="getdatabase();">
<form method="post" name="myform">
<table>
	<tr>
	<td colspan="3">
	<select class="drp" id="seldata" onchange="gettable(this.value)" style="width: 200px;padding: 7px;background-color: white;">
		<option>--Select Database--</option>
	</select>
	</td>
	</tr>
	<tr>
	<td colspan="3">
	<select class="drp" id="seltab" onchange="getfiled(this.value)" style="width: 200px;padding: 7px;background-color: white;">
		<option>--Select Table--</option>
	</select>
	</td>
	</tr>
	<tr>
	<td rowspan="4">
		<select multiple="multiple" id="filedd" style="width: 200px;height: 300px;" class="drp">
			
		</select>
	</td>
	<td>
		<input type="button" value="^" onclick="getup();" style="width: 40px; padding: 10px;">&nbsp;&nbsp;
		<input type="button" value="V" onclick="getdown();" style="width: 40px;padding: 10px;"> </br></br>
		<input type="button" name="seloner" value=">" onclick="getseloner();" style="width: 40px;padding: 10px;">&nbsp;&nbsp;
		<input type="button" name="selonel" value="<" onclick="getselonel();" style="width: 40px;padding: 10px;"></br></br>
		<input type="button" name="selmull" value="<<" onclick="getalll();" style="width: 40px;padding: 10px;">&nbsp;&nbsp;
		<input type="button" name="selmulr" value=">>" onclick="getallr();" style="width: 40px;padding: 10px;">
		
	
		
	</td>
	<td>
	<select multiple="multiple" id="f" class="drp" style="width: 200px;height: 
	300px;">
			
		</select>
	</td>
	</tr>
</table>
</form>
	<div id="dis" class="dis">
	</div>
</body>
</html>