<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
     function getdata()
     {
          var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function(){
     if (this.readyState == 4 && this.status == 200) {
     //document.getElementById("demo").innerHTML = this.responseText;
     var res=this.responseText;
     //var table = "<table border=1>";
     
     document.getElementById("demo").innerHTML=res;
 }
 }
  
  };
  xhttp.open("GET","dem.txt", true);
  xhttp.send();
 </script>
</head>
<body>
<div id="demo">
</div>

</body>
</html>
