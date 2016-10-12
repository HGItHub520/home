
<?php 
  //echo $_GET["na"];
 ?>
<!DOCTYPE html>
<html>
<head>
   <meta content="text/html; charset=UTF-8" />
    <title>
        php处理ajax数据
    </title>
    <style type="text/css">
      .box
      {
      	width: 600px;
      	height: 380px;
      	border: 1px solid green;
      	margin: 50px auto;
      	text-align: center;
      }
      .box button
      {
      	width: 50px;
      	height: 40px;
      	display: inline-block;
      	vertical-align: middle;
      	color: blue;
      }
      #ptxt
      {
      	color: red;
      	font-size: 30px;
      	font-weight: bold;
      }
    </style>
    <script type="text/javascript">
    	window.onload=function () 
    	{
    	    var btn=document.getElementById("btn");
    	    var txt=document.getElementById("txt");
    	    btn.onclick=function()
    	    {
    	    	var xhr=new XMLHttpRequest();
    	    	xhr.open("GET","disposeajax.php?na="+encodeURIComponent(txt.value));
    	    	xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    	    	xhr.onreadystatechange=function()
    	    	{
    	    		if(xhr.status==200&&xhr.readyState==4)
    	    		{
    	    			document.getElementById("ptxt").innerHTML=xhr.responseText;
    	    		}
    	    	}
    	    	xhr.send(null);
    	    }
    	}
    </script>
</head>
<body>
<div class="box">
    <button id="btn">提交</button>
    <input type="text" value="" id="txt">
    <p id="ptxt"></p>
</div>
</body>
</html>