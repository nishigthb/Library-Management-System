<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		E-Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/9.png">
			<h1 style="color: white;">E-LIBRARY MANAGEMENT SYSTEM</h1>
		</div>

		<?php
		if(isset($_SESSION['login_user']))
		{ //if student has  logged in 
			?>
				<nav>
					<ul>
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				</nav>
			<?php
		}
		else
		{ //if student has not logged in 
			?>
						<nav>
							<ul>
								<li><a href="index.php">HOME</a></li>
						<li><a href="listofbooks.php">BOOKS</a></li>
								<li><a href="student_login.php">LOGIN</a></li>
								<li><a href="registration.php">SIGN-UP</a></li>
								<li><a href="feedback.php">FEEDBACK</a></li>
							</ul>
						</nav>
		<?php
		}
			
		?>

			
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">Welcome to library</h1><br><br><br>
				<h1 style="text-align: center;font-size: 25px;">" Today a reader ,<br>tomorrow a leader "</h1><br><br>
			<h1 style="text-align: center;font-size: 25px;text-align: right">-Maragaret Fuller</h1><br>
			</div>
		</div>
		</section>
		

	</div>
	
</body>
</html>