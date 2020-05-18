<?php 
//	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>

	<style type="text/css">
		body
		{
			height: 650px;
			background-image: url("images/pswd.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		}
		.wrapper
		{
			width: 400px;
			height: 400px;
			margin:100px auto;
			background-color: black;
			opacity: .6;
			color: white;
			padding: 27px 15px;
		}
		.form-control
		{
			width: 300px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div style="text-align: center;">
			<h1 style="color:white;text-align:center"> <b>Change Password</b></h1>
			
		</div>
		<div style="padding-left: 30px; ">
		<form action="" method="post" onSubmit="return checkPassword(this)" >	
			<input type="text" name="username" class="form-control" placeholder="Username" required=""><br><br>
			<input type="password" name="password" class="form-control" placeholder ="New Password" required=""><br><br>
			<input type="password" name="cpassword" class="form-control" placeholder ="Confirm Password" required=""><br>
			<button class= "btn btn-default" type="submit" name="submit"> Update</button>
		</form>
	</div>
	
	<?php
if(isset($_POST['submit'])) // update student password
{	
	if(mysqli_query($db,"UPDATE student SET password='$_POST[password]'WHERE username='$_POST[username]';"))
	{
		?>
		<script type="text/javascript">
			alert("password updated successfully");
			         window.location="index.php"          
		</script>
	<?php
	}
}
	?>

<script> 
   function checkPassword(form) { 
                password = form.password.value; 
                cpassword = form.cpassword.value; 
                if (password!= cpassword) {  // If Not same return False.     
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
                else{ 
      				alert ("\nPasswords match") 
                    return true; 
                } 
            } 
</script> 

</div>
</body>
</html>