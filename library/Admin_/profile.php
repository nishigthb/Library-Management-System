<?php 
//	include "connection.php";
	include "navbar.php";
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Profile</title>
 	<style type="text/css">

		body {
/*  background-color: #024629;*/
  background-color:grey;
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top: 50px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #222;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.img-circle
{
	margin-left: 20px;
}
.h:hover
{
	color:white;
	width: 300px;
	height: 50px;
	background-color: #00544c;
}
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
 			color:black;
 		}


 	</style>
 </head>
 <!--<body style="background-color: #004528; "> -->
<body >
	<!--_________________sidenav_______________-->
	
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  			<div style="color: white; margin-left: 60px; font-size: 20px;">

                <?php
                if(isset($_SESSION['login_user']))

                { 	echo "<img class='img-circle profile_img' height=120 width=120 src='images/".$_SESSION['pic']."'>";
                    echo "</br></br>";

                    echo "Welcome ".$_SESSION['login_user']; 
                }
                ?>
            </div><br><br>

 <div class="h"> <a href="add.php">Add Books</a> </div> 
  <div class="h"> <a href="delete.php">Delete Books</a></div>
  <div class="h"> <a href="request.php">Book Request</a></div>
  <div class="h"> <a href="issue_info.php">Issue Information</a></div>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer; color: black;" onclick="openNav()">&#9776;</span>
  <div class="container" style="text-align: center;">
    <h2 style="color:black; font-family:Arial; text-align: center"><b>My Profile</b></h2>
</div></div>

 	<div class="container">
 		<form action="" method="post">
 			<button class="btn btn-default" style="float:right; width: 70px;" name="submit1" type="submit">Edit</button>
 		</form>
 		<div class="wrapper">
 			<?php

 			if(isset($_POST['submit1']))
 			{
 				?>
 				<script type="text/javascript">
 					window.location="edit.php"
 				</script>
 				<?php
 			}


 				$q=mysqli_query($db,"SELECT * FROM admin where username='$_SESSION[login_user]' ;");
 			?>
 			<!--<h2 style="text-align: center;">My Profile</h2> -->

 			<?php
 				$row=mysqli_fetch_assoc($q);

 				echo "<div style='text-align: center'>
 					<img class='img-circle profile-img' height=110 width=120 src='images/".$_SESSION['pic']."'>
 				</div>";
 			?>
 			<div style="text-align: center;"> <b>Welcome, </b>
	 			<h4>
	 				<?php echo $_SESSION['login_user']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
 	</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
  document.getElementById("main").style.marginLeft = "300px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "grey";
}
</script>
 </body>
 </html>