<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		 Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	nav
	{
		float: right;
		word-spacing:50px;
		padding: 40px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	} 
</style>
</head> 
 	<div class="wrapper">
		<header>
		<div class="logo">
			<h1 style="color: white">ONLINE E-LIBRARY MANAGEMENT SYSTEM</h1>
		</div>
			<nav>
				<ul>
					<li><a href="index1.php">HOME</a></li>
					<li><a href="listofbooks.php">BOOKS</a></li>
					<li><a href="studentlogin.php">STUDENT-LOGIN</a></li>
					<li><a href="adminlogin.php">ADMIN-LOGIN</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br><br>
			</div>
		</div>
		
		</section>
	<!--	<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
		<br>		
			</p>
		</footer> -->
	</div>
</body>
</html>