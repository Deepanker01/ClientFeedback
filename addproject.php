<?php
session_start();

if(isset($_POST['deadline']) && isset($_POST['money']) && isset($_POST['name']))
	{
		require "conn.php";
	$deadline = $_POST['deadline'];
		$money = $_POST['money'];
				$pname = $_POST['name'];
		$cid = $_SESSION['cid'];
 	$pid = rand(1,9999);
		$sql = "INSERT INTO `project`(`pid`, `deadline`, `money`, `level`, `cid`, `pname`) VALUES ('$pid','$deadline','$money',0,'$cid', '$pname')";
	$res = mysql_query($sql);
	
	// $sql2 = "INSERT INTO `assigned_to`(`pid`, `devid`) VALUES ('$pid','$cid')";
	// $sql3 = mysql_query($sql2);
	// if($sql3)
	// {
	// 	echo "HO GYA";
	// }
if($res)
{
	$msg = "YOUR PROJECT HAS BEEN ADDED";
}
	if(isset($_POST['m1']))
	{  $m1 = $_POST['m1'];
mysql_query("INSERT INTO `modules`(`pid`, `modules`) VALUES ('$pid','$m1')");
}
	if(isset($_POST['m2']))
	{  $m2 = $_POST['m2'];
mysql_query("INSERT INTO `modules`(`pid`, `modules`) VALUES ('$pid','$m2')");
}
	if(isset($_POST['m3']))
	{  $m3 = $_POST['m3'];
mysql_query("INSERT INTO `modules`(`pid`, `modules`) VALUES ('$pid','$m3')");
}
	if(isset($_POST['m4']))
	{  $m4 = $_POST['m4'];
mysql_query("INSERT INTO `modules`(`pid`, `modules`) VALUES ('$pid','$m4')");
}
	if(isset($_POST['m5']))
	{  $m5 = $_POST['m5'];
mysql_query("INSERT INTO `modules`(`pid`, `modules`) VALUES ('$pid','$m5')");
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
			height:800px;
			padding:20px;
			margin:30px auto;
			margin-top: -200px;
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
				#form input[type="date"] 
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
			margin-left: 125px;
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
	<div id="header_text" style="font-size: 20px; weight='bold'">ADD A PROJECT</div>
    	<a href="addproject.php"><button class= "button"> Add a Project </button></a><br> <br> <br>
    	<a href="checkprogress.php"><button class= "button"> Check the Progress </button></a> <br> <br> <br>
  <a href="searchclient.php"><button class= "button"> Search Project </button></a> <br> <br> <br>	

		<a href="logout.php"><button class= "button"> LogOut </button></a>
  	<a href="#" style="margin-left:430px;"> <?php if(isset($msg)) echo "<script> alert('Congrats Your Project has been added'); </script>" ?> </a>
			<div id="formdiv">
				<form id="form" action="addproject.php" method="post">
				<div id="crossdiv"><input type="reset" id="cross"/><br /></div>
				HELLO <?php echo $_SESSION['name']; ?> <br> <br>

				NAME:<br /><input type ="text" name = "name" placeholder="Name of Project"/>
				DEADLINE(DD-MM-YY):<br /><input type="date" name="deadline" placeholder="Project Deadline"/><br />
				
				MONEY:<br /><input type ="text" name = "money" placeholder="Money"/>
				
				MODULES: 
<br /><input type="text" name="m1" placeholder="Module 1"/><br />
<br /><input type="text" name="m2" placeholder="Module 2"/><br />
<br /><input type="text" name="m3" placeholder="Module 3"/><br />
<br /><input type="text" name="m4" placeholder="Module 4"/><br />
<br /><input type="text" name="m5" placeholder="Module 5"/><br />

				<br /><input type="submit" class="button"/>


				<br />
				<br> <br>
				<div  style="color:green">
				</div>
				</form>

		
			</div>	
     </div>
	</div>
    <footer>©GraysLabs. All Rights Reserved.</footer>
</body>
</html>