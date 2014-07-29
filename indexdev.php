<?php

if(!empty($_POST['email']) && (!empty($_POST['pass'])))
{
if(isset($_POST['email']) && isset($_POST['pass']))
{
session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];
$_SESSION['email'] = $email ;
require "conn.php";

$result = mysql_query("SELECT * from `developers` where email='$email'");

while($row = mysql_fetch_array($result))
{
$pass2 = $row['password'];
$devid = $row['devid'];
$name = $row['name'];
$depid = $row['did'];
}
if (!isset($pass2))
echo "<script> alert('Email Not Found'); </script>";

else if($pass2== $pass)
{
	$_SESSION['name'] = $name;
	$_SESSION['devid'] = $devid;

	 echo "<script> window.location = 'checklist.php'; </script>";
}
else
$msg = "INVALID CREDENTIALS";
}

}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">	
	<title>GraysLab</title>
	<link rel="shortcut icon" href="logo.ico"/>
	
	<script src="1jquery.js"></script>
	<!--<script src="jquery.js"></script>-->
<script type="text/javascript">
	$(document).ready(function()
	{
		var h=$(window).height();
		var w=$(window).width();
		//alert(h+" " + w);
		var wrapper=document.getElementById("wrapper");
		var main=document.getElementById("main");
		var top=document.getElementById("top");
		var header=document.getElementById("header");
		wrapper.style.width=w+"px";
		wrapper.style.height=h+"px";
		main.style.width=w+"px";
		main.style.height=h+"px";
		top.style.width=w+"px";
		var x=top.style.width=w+"px";
		header.style.width=(0.9*x)+"px";
	});
	if (/(NetFront|PlayStation)/i.test(navigator.userAgent))
		document.write(unescape('%3C') + 'link rel="stylesheet" href="handheld.css"\/' + unescape('%3E'));
	if (/(hiptop|IEMobile|Smartphone|Windows CE|NetFront|PlayStation|Opera Mini)/i.test(navigator.userAgent))
		document.write(unescape('%3C%21--'));
</script>
<style type="text/css" media="screen">
	*{
		margin:0;padding:0;
	}
	@media handheld { background:url(mbackground.JPG); }
	@import url("handheld.css") handheld
	@font-face{
		font-family:roboto;
		src:url('Roboto-Condensed.ttf');
	}
	BODY{background:url(background.JPG);}
		#wrapper
		{
		position:relative;
		}
		#main{
			margin:0 auto;
		}
		#top{
			background-color:white;
			height:120px;
			padding:8px;
			
		}
		#logo
		{
			width:220px;
			height:120px;
			float:left;
			
			
		}
		#header
		{
			height:100px;
			width:80%;
			float:left;
			margin-left:-20px;
			margin-top:5px;
		}
		
		#header_text{
			text-align:center;
			font-family:roboto;
			font-size:60px;
			vertical-align:middle;
			margin:0 auto;
			width:90%;
			margin-top:15px;
			color: #1db7cb;
			transition:color 0.4s,opacity 2s ease-in;
			-moz-transition:color 0.4s,opacity 2s ease-in;
			-webkit-transition:color 0.4s,opacity 2s linear;
			cursor: hand;
			font-shadow:1px 1px 1px 1px white;
		}
		
		#header_text:hover{
		color:#797979;
		opacity:1;
		}
		#formdiv{
			border:2px solid #ccc;
			width:400px;
			height:400px;
			padding:20px;
			margin:30px auto;
			background:#f1f1f1;
		}
		#form{
			
			font-family:roboto;
			font-weight:bold;
			line-height: 23px;
			font-size:12px;
			
		}
		#form input[type="text"] 
		{ 
			width: 380px;
			background-color: rgba(255, 255, 255, 0.4); 
			border: 1px solid rgba(122, 192, 0, 0.15); 
			padding: 7px; 
			font-family: Keffeesatz, Arial; 
			color: #4b4b4b; 
			font-size: 18px; 
			-webkit-border-radius: 5px; 
			margin-bottom: 15px; 
			margin-top: 7px;
		}
				#form input[type="password"] 
		{ 
			width: 380px;
			background-color: rgba(255, 255, 255, 0.4); 
			border: 1px solid rgba(122, 192, 0, 0.15); 
			padding: 7px; 
			font-family: Keffeesatz, Arial; 
			color: #4b4b4b; 
			font-size: 18px; 
			-webkit-border-radius: 5px; 
			margin-bottom: 15px; 
			margin-top: 7px;
		}

		#form input:focus
		{ 
		border: 1px solid #ff5400; 
		background-color: rgba(255, 255, 255, 1); 
		}
		#form input.button
		{ 
			background: #4b8df9;
			margin-left: 150px;
			margin-top: 20px; 
			display: inline-block; 
			padding: 5px; 
			color: #fbf7f7; 
			text-decoration: none; 
			font-weight: bold; 
			-moz-border-radius: 5px; 
			-webkit-border-radius: 5px; 
			border-radius: 5px; 
			-moz-box-shadow: 0 1px 3px #999; 
			-webkit-box-shadow: 0 1px 3px #999; 
			box-shadow: 0 1px 3px #999; 
			text-shadow: 0 -1px 1px #222; 
			border: none; 
			position: relative; 
			cursor: pointer; 
			font-size: 14px; 
			opacity:0.6;
			font-family:roboto,Verdana, Geneva, sans-serif;
			transition:opacity 0.2s ease-in;
			-moz-transition:opacity 0.2s ease-in;
			-webkit-transition:opacity 0.2s ease-in;
		}
		#form input.button:hover{
			opacity:1;
		}
		#cross{
			background:url("reset.jpg");
			text:none;
			width:9px;
			height:10px;
			border:none;
			color:transparent;
			cursor:pointer;
			margin:0 auto;
			float:right;
		}
		#crossdiv{
			
			height:5px;
		}
		
		footer{
			position:fixed;
			bottom:0;
			width:100%;
			text-align:center;
			background-color:rgba(0,0,0,0.2);
			font-family:roboto;
		}
		.button
		{ 
			background: #4b8df9;
			margin-left: 110px;
			margin-top: 0px; 
			display: inline-block; 
			padding: 5px; 
			color: #fbf7f7; 
			text-decoration: none; 
			font-weight: bold; 
			-moz-border-radius: 5px; 
			-webkit-border-radius: 5px; 
			border-radius: 5px; 
			-moz-box-shadow: 0 1px 3px #999; 
			-webkit-box-shadow: 0 1px 3px #999; 
			box-shadow: 0 1px 3px #999; 
			text-shadow: 0 -1px 1px #222; 
			border: none; 
			position: relative; 
			cursor: pointer; 
			font-size: 14px; 
			opacity:0.6;
			font-family:roboto,Verdana, Geneva, sans-serif;
			transition:opacity 0.2s ease-in;
			-moz-transition:opacity 0.2s ease-in;
			-webkit-transition:opacity 0.2s ease-in;
		}
		
		.button:hover {
			opacity:1;
		}
		
	</style>
<link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="handheld.css" />	
<link rel="stylesheet" type="text/css" media="handheld" href="handheld.css" />
<link rel="stylesheet" href="handheld.css" media="handheld,only screen and (max-device-width:480px)"/>	
</head>
<body>
	<div id="wrapper">
    <div id="main">
	<div id="top">
		<img id="logo"  src="GL.png"/>
		<div id="header"><div id="header_text">GRAYSLAB</div></div>
	</div>
	<div id="header_text" style="font-size: 20px; weight='bold'">DEVELOPER LOGIN</div>
			<div id="formdiv">
				<form id="form" action="indexdev.php" method="post">
				<div id="crossdiv"><input type="reset" id="cross"/><br /></div>
				DEVELOPER EMAIL:<br /><input type="text" name="email" placeholder="Developer Email"/><br />
				
				PASSWORD:<br /><input type ="password" name = "pass" placeholder="Password"/>
				<br /><input type="submit" class="button"/>
				
				<br />
				<br> <br>
<p align="center">	<?php  if(isset($msg)) echo $msg;?> </p>	
				<div  style="color:green">
				</div>
				</form>
				<a href="devreg.php"><button class= "button"> Register Developer </button></a>

			</div>	
     </div>
	</div>
    <footer>©GraysLabs. All Rights Reserved.</footer>
</body>
</html>