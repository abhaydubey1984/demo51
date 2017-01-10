var dbnam;
function getdatabase()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
	if(this.readyState == 4 && this.status == 200)
	{
		var res=JSON.parse(this.responseText);
		var op="<option>--Select Database--</option>";
		for(i=0;i<res.length;i++)
		{
			op=op+"<option value="+res[i].Database+">"+res[i].Database+"</option>";
		}
		document.getElementById("seldata").innerHTML=op;
	}
	};
	xhttp.open("GET", "http://192.168.200.54/demo51/getdatabase.php", true);
  	xhttp.send();
}
function gettable(dbname)
{
	var xx=document.getElementById("f");
	for (var i = xx.options.length-1 ; i >= 0; i--) 
	{
    	xx.remove(i);
    }
	dbnam=dbname;
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
	var op="<option>--Select Table--</option>";	
	if(this.readyState == 4 && this.status == 200)
	{
		var res=JSON.parse(this.responseText);
		for(i=0;i<res.length;i++)
		{
			op=op+"<option value="+res[i].TABLE_NAME+">"+res[i].TABLE_NAME+"</option>";
		}
		document.getElementById("seltab").innerHTML=op;
	}
	};
	xhttp.open("GET", "http://192.168.200.54/demo51/gettable.php?dbname="+dbnam, true);
  	xhttp.send();
}
function getfiled(tblname)
{
	var xx=document.getElementById("f");
	for (var i = xx.options.length-1 ; i >= 0; i--) 
	{
    	xx.remove(i);
   	}
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
	var op;	
	if(this.readyState == 4 && this.status == 200)
	{
		var res=JSON.parse(this.responseText);
		for(i=0;i<res.length;i++)
		{
			op=op+"<option value="+res[i].COLUMN_NAME+">"+res[i].COLUMN_NAME+"</option>";
		}
		document.getElementById("filedd").innerHTML=op;
	}
	};
	xhttp.open("GET", "http://192.168.200.54/demo51/getfiled.php?dbname='"+dbnam+"' && tblname='"+tblname+"'", true);
  	xhttp.send();
}
function getseloner()
{
	var x=document.getElementById("filedd");
	var xx=document.getElementById("f");
	var op;
	for(var ii=0;ii<xx.options.length;ii++)
	{
		op=op+"<option value="+xx.options[ii].value+">"+xx.options[ii].value+"</option>";
	}
	for (var i = 0; i < x.options.length; i++) 
	{
     	if(x.options[i].selected ==true)
     	{
          	op=op+"<option value="+x.options[i].value+">"+x.options[i].value+"</option>";
        }
    }
    for (var i = x.options.length-1 ; i >= 0; i--) 
    {
     	if(x.options[i].selected ==true)
     	{
      		x.remove(i);
      	}
   	}
	document.getElementById("f").innerHTML=op;
	var dbname=document.getElementById("seldata");
	var dbnamm=dbname.options[dbname.selectedIndex].value;
	var tbname=document.getElementById("seltab");
	var tblname=tbname.options[tbname.selectedIndex].value;
	var head;
	var tab;
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			//alert(res.length);
			//console.log(dbnamm+"  "+tblname);
			var res=JSON.parse(this.responseText);

			console.log(res.length);

			tab="<table>"
			for(var ii=0;ii<xx.options.length;ii++)
			{
				//alert("hello");
				tab=tab+"<th>"+xx.options[ii].value+"</th>"
				//alert(tab);
			}	
			
			//alert(tab);
			for(j=0;j<res.length;j++)
			{
				//alert(j);
				tab=tab+"<tr>";
				for(ii=0;ii<xx.options.length;ii++)
				{
					var d=xx.options[ii].value;
					//alert(d);
					var da="res["+j+"]."+d;
					//eval(da);
					//alert(da);
					tab=tab+"<td>"+eval(da)+"</td>";
				}
			}
			tab=tab+"</tr>";
			tab=tab+"</table>";
			document.getElementById("dis").innerHTML=tab;
		}
	};
	var abc = "http://192.168.200.54/demo51/getdynadata.php?dbname="+dbnamm+"&tblname="+tblname+"";
	console.log(abc);
	xhttp.open("GET", abc, true);
	xhttp.send();
}
function getselonel()
{
	var x=document.getElementById("filedd");
	var xx=document.getElementById("f");
	var op;
	for(var ii=0;ii<x.options.length;ii++)
	{
		op=op+"<option value="+x.options[ii].value+">"+x.options[ii].value+"</option>";
	}
	
	for (var i = 0; i < xx.options.length; i++)
	{
		if(xx.options[i].selected ==true)
		{
  			op=op+"<option value="+xx.options[i].value+">"+xx.options[i].value+"</option>";
  		}
	}
	for (var i = xx.options.length-1 ; i >= 0; i--) 
	{
     	if(xx.options[i].selected ==true)
     	{
      		xx.remove(i);
    	}
    }
	document.getElementById("filedd").innerHTML=op;

	var dbname=document.getElementById("seldata");
	var dbnamm=dbname.options[dbname.selectedIndex].value;
	var tbname=document.getElementById("seltab");
	var tblname=tbname.options[tbname.selectedIndex].value;
	var head;
	var tab;
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			//alert(res.length);
			//console.log(dbnamm+"  "+tblname);
			var res=JSON.parse(this.responseText);

			console.log(res.length);

			tab="<table>"
			for(var ii=0;ii<xx.options.length;ii++)
			{
				//alert("hello");
				tab=tab+"<th>"+xx.options[ii].value+"</th>"
				//alert(tab);
			}	
			
			//alert(tab);
			for(j=0;j<res.length;j++)
			{
				//alert(j);
				tab=tab+"<tr>";
				for(ii=0;ii<xx.options.length;ii++)
				{
					var d=xx.options[ii].value;
					//alert(d);
					var da="res["+j+"]."+d;
					//eval(da);
					//alert(da);
					tab=tab+"<td>"+eval(da)+"</td>";
				}
			}
			tab=tab+"</tr>";
			tab=tab+"</table>";
			document.getElementById("dis").innerHTML=tab;
		}
	};
	var abc = "http://192.168.200.54/demo51/getdynadata.php?dbname="+dbnamm+"&tblname="+tblname+"";
	console.log(abc);
	xhttp.open("GET", abc, true);
	xhttp.send();
}
function getallr()
{
	var x=document.getElementById("filedd");
	var xx=document.getElementById("f");
	var dbname=document.getElementById("seldata");
	var dbnamm=dbname.options[dbname.selectedIndex].value;
	var tbname=document.getElementById("seltab");
	var tblname=tbname.options[tbname.selectedIndex].value;
	var op;
	//start
	var xx=document.getElementById("f");
	for (var i = xx.options.length-1 ; i >= 0; i--) 
	{
    	xx.remove(i);
   	}
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
	var op;	
	if(this.readyState == 4 && this.status == 200)
	{
		var res=JSON.parse(this.responseText);
		for(i=0;i<res.length;i++)
		{
			op=op+"<option value="+res[i].COLUMN_NAME+">"+res[i].COLUMN_NAME+"</option>";
		}
		document.getElementById("f").innerHTML=op;
	}
	};
	xhttp.open("GET", "http://192.168.200.54/demo51/getfiled.php?dbname='"+dbnamm+"' && tblname='"+tblname+"'", true);
  	xhttp.send();

	//end
	if(x.options.length!=0)
	{
		
		for (var i = 0; i < x.options.length; i++) 
		{
			op=op+"<option value="+x.options[i].value+">"+x.options[i].value+"</option>";
	    }
	    for (var i = x.options.length-1 ; i >= 0; i--) 
	    {
	     	x.remove(i);
	    }
		document.getElementById("f").innerHTML=op;
	
		var head;
		var tab;
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				//alert(res.length);
				//console.log(dbnamm+"  "+tblname);
				var res=JSON.parse(this.responseText);
				tab="<table>"
				for(var ii=0;ii<xx.options.length;ii++)
				{
					tab=tab+"<th>"+xx.options[ii].value+"</th>"
				}	
				for(j=0;j<res.length;j++)
				{
					tab=tab+"<tr>";
					for(ii=0;ii<xx.options.length;ii++)
					{
						var d=xx.options[ii].value;
						var da="res["+j+"]."+d;
						tab=tab+"<td>"+eval(da)+"</td>";
					}
				}
				tab=tab+"</tr>";
				tab=tab+"</table>";
				document.getElementById("dis").innerHTML=tab;
			}
		};
		var abc = "http://192.168.200.54/demo51/getdynadata.php?dbname="+dbnamm+"&tblname="+tblname+"";
		console.log(abc);
		xhttp.open("GET", abc, true);
		xhttp.send();
	}
}
function getalll()
{
	var x=document.getElementById("filedd");
	var xx=document.getElementById("f");
	var op;
	var dbname=document.getElementById("seldata");
	var dbnamm=dbname.options[dbname.selectedIndex].value;
	var tbname=document.getElementById("seltab");
	var tblname=tbname.options[tbname.selectedIndex].value;
	//start
	//var xx=document.getElementById("f");
	for (var i = x.options.length-1 ; i >= 0; i--) 
	{
    	x.remove(i);
   	}
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange = function(){
	var op;	
	if(this.readyState == 4 && this.status == 200)
	{
		var res=JSON.parse(this.responseText);
		for(i=0;i<res.length;i++)
		{
			op=op+"<option value="+res[i].COLUMN_NAME+">"+res[i].COLUMN_NAME+"</option>";
		}
		document.getElementById("filedd").innerHTML=op;
	}
	};
	xhttp.open("GET", "http://192.168.200.54/demo51/getfiled.php?dbname='"+dbnamm+"' && tblname='"+tblname+"'", true);
  	xhttp.send();

	//end
	if(xx.options.length!=0)
	{
		
		for (var i = 0; i < xx.options.length; i++) 
		{
	     	op=op+"<option value="+xx.options[i].value+">"+xx.options[i].value+"</option>";
	    }
		for (var i = xx.options.length-1 ; i >= 0; i--) 
		{
	     			xx.remove(i);
	    }
		document.getElementById("filedd").innerHTML=op;
		var dbname=document.getElementById("seldata");
		var dbnamm=dbname.options[dbname.selectedIndex].value;
		var tbname=document.getElementById("seltab");
		var tblname=tbname.options[tbname.selectedIndex].value;
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				//alert(res.length);
				//console.log(dbnamm+"  "+tblname);
				var res=JSON.parse(this.responseText);

				console.log(res.length);

				tab="<table>"
				for(var ii=0;ii<xx.options.length;ii++)
				{
					//alert("hello");
					tab=tab+"<th>"+xx.options[ii].value+"</th>"
					//alert(tab);
				}	
				
				//alert(tab);
				for(j=0;j<res.length;j++)
				{
					//alert(j);
					tab=tab+"<tr>";
					for(ii=0;ii<xx.options.length;ii++)
					{
						var d=xx.options[ii].value;
						//alert(d);
						var da="res["+j+"]."+d;
						//eval(da);
						//alert(da);
						tab=tab+"<td>"+eval(da)+"</td>";
					}
				}
				tab=tab+"</tr>";
				tab=tab+"</table>";
				document.getElementById("dis").innerHTML=tab;
			}
		};
		var abc = "http://192.168.200.54/demo51/getdynadata.php?dbname="+dbnamm+"&tblname="+tblname+"";
		console.log(abc);
		xhttp.open("GET", abc, true);
		xhttp.send();
	}
}
function getup()
{

	var x=document.getElementById("filedd");
	var xx=document.getElementById("f");
	var c=0;
	if(xx.options.selectedIndex!=0)
	{
	for(i=0;i<xx.options.length;i++)
	{
		if(xx.options[i].selected == true)
		{
			c=c+1;
		}
	}
	if(c==1)
	{
		var selindex=xx.options.selectedIndex;
		var cc=selindex-1;
		var selectedValue = xx.options[xx.selectedIndex].value;
		var selectedValue1 = xx.options[xx.selectedIndex-1].value;
		xx.options[cc].value=selectedValue;
		xx.options[selindex].value=selectedValue1;
		xx.options[cc].text=selectedValue;
		xx.options[selindex].text=selectedValue1;
		xx.options.selectedIndex=cc;
		//start
		var dbname=document.getElementById("seldata");
		var dbnamm=dbname.options[dbname.selectedIndex].value;
		var tbname=document.getElementById("seltab");
		var tblname=tbname.options[tbname.selectedIndex].value;
		var head;
		var tab;
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				var res=JSON.parse(this.responseText);
				console.log(res.length);
				tab="<table>"
				for(var ii=0;ii<xx.options.length;ii++)
				{
					tab=tab+"<th>"+xx.options[ii].value+"</th>"
				}	
				for(j=0;j<res.length;j++)
				{
					tab=tab+"<tr>";
					for(ii=0;ii<xx.options.length;ii++)
					{
						var d=xx.options[ii].value;
						 da="res["+j+"]."+d;
						tab=tab+"<td>"+eval(da)+"</td>";
					}
				}
				tab=tab+"</tr>";
				tab=tab+"</table>";
				document.getElementById("dis").innerHTML=tab;
			}
		};
		var abc = "http://192.168.200.54/demo51/getdynadata.php?dbname="+dbnamm+"&tblname="+tblname+"";
		console.log(abc);
		xhttp.open("GET", abc, true);
		xhttp.send();
		//end
    }	
	if(c==0)
	{
		alert("Select One Item..");
	}
	if(c>1)
	{
		alert("Select Only One Item");
	}
	}
}

function getdown()
{
    var x=document.getElementById("filedd");
	var xx=document.getElementById("f");
	var c=0;
	//alert(xx.options.selectedIndex+ "  "+xx.options.length);
	if(xx.options.selectedIndex<xx.options.length-1)
	{
	for(i=0;i<xx.options.length;i++)
	{
		if(xx.options[i].selected == true)
		{
			c=c+1;
		}
	}
	if(c==1)
	{
		var selindex=xx.options.selectedIndex;
		var cc=selindex+1;
		var selectedValue = xx.options[xx.selectedIndex].value;
		var selectedValue1 = xx.options[xx.selectedIndex+1].value;
		xx.options[cc].value=selectedValue;
		xx.options[selindex].value=selectedValue1;
		xx.options[cc].text=selectedValue;
		xx.options[selindex].text=selectedValue1;
		xx.options.selectedIndex=cc;
		//start
		var dbname=document.getElementById("seldata");
		var dbnamm=dbname.options[dbname.selectedIndex].value;
		var tbname=document.getElementById("seltab");
		var tblname=tbname.options[tbname.selectedIndex].value;
		var head;
		var tab;
		var xhttp=new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				//alert(res.length);
				//console.log(dbnamm+"  "+tblname);
				var res=JSON.parse(this.responseText);

				console.log(res.length);
				tab="<table>";
				for(var ii=0;ii<xx.options.length;ii++)
				{
					//alert("hello");
					tab=tab+"<th>"+xx.options[ii].value+"</th>";
					//alert(tab);
				}	
				
				//alert(tab);
				for(j=0;j<res.length;j++)
				{
					//alert(j);
					tab=tab+"<tr>";
					for(ii=0;ii<xx.options.length;ii++)
					{
						var d=xx.options[ii].value;
						//alert(d);
						var da="res["+j+"]."+d;
						//eval(da);
						//alert(da);
						tab=tab+"<td>"+eval(da)+"</td>";
					}
				}
				tab=tab+"</tr>";
				tab=tab+"</table>";
				document.getElementById("dis").innerHTML=tab;
			}
		};
		var abc = "http://192.168.200.54/demo51/getdynadata.php?dbname="+dbnamm+"&tblname="+tblname+"";
		console.log(abc);
		xhttp.open("GET", abc, true);
		xhttp.send();
		//end
    }	
	if(c==0)
	{
		alert("Select One Item..");
	}
	if(c>1)
	{
		alert("Select Only One Item");
	}
	}
}