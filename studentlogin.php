<?php
   include "connection.php";   
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Login</title>
      <link rel="stylesheet" type="text/css" href="style.css">
     <link rel= "stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--<style >
ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:black;
}
li{
  float: left;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
li a:hover{
  background-color:grey;
}
</style> -->
   </head>
<body>
<!--<ul >
  <li><a  href="index1.php">HOME</a></li>
  <li><a href="listofbooks.php">BOOKS</a></li>
  <li><a href="feedback.php">CONTACT</a></li>
  <li><a href="#">ABOUT</a></li>
  </ul> -->
      <div class="container" id="container">
         <div class="form-container sign-up-container">
            <form action="" method="post">
               <h1> Create Account</h1>
               <input type="text" placeholder="First Name"name="fname" required="" />
               <input type="text" placeholder="Middle Name" name="mname" required="" />
               <input type="text" placeholder="Last Name" name="lname" required="" />
               <input type="text" placeholder="Roll Number" name="roll" required="" />
               <input type="email" placeholder="Email Id" name="email"  required=""/>
               <input type="text" placeholder="Username" name="Username"required="" />
               <input type="password" placeholder="Password"  name="password" required=""/>
               <input class="btn btn-default" type="submit" name="submit" value="Sign Up"style="background-color: #FF4B2B;color: #FFFFFF;width: 70px; height: 30px"> 
            </form>

         </div>
         <div class="form-container sign-in-container">
            <form name="login" action="" method="post">
               <h1>Sign in </h1>
               <input type="text" placeholder="Username" />
               <input type="password" placeholder="Password" />
               <a href="supdate_password.php">Forgot your password?</a>
               <input class="btn btn-default" type="submit" name="submit" value="Login" style="color: black; width: 70px; height: 30px">
            </form>
         </div>
         <div class="overlay-container">
            <div class="overlay">
               <div class="overlay-panel overlay-left">
                  <h1>Welcome Back!</h1>
                  <p>To keep connected with us please login</p>
                  <button class="ghost" id="signIn">Sign In</button>
               </div>
               <div class="overlay-panel overlay-right">
                  <h1>Hello, Friend!</h1>
                  <p>New to the website?<br><br>Enter your details and start journey with us</p>
                  <button class="ghost" id="signUp">Sign Up</button>
               </div>
            </div>
         </div>
      </div>
      <script src="main.js" type="text/javascript"></script>
      <?php
         if(isset($_POST['submit']))
         {
           $count=0;
           $sql="SELECT Username from `student`";
           $res=mysqli_query($db,$sql);
           while($row=mysqli_fetch_assoc($res))
           {
             if($row['Username']==$_POST['Username'])
             {
               $count=$count+1;
             }
           }
           if($count==0)
           {
             mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[fname]', '$_POST[mname]', '$_POST[lname]', '$_POST[roll]', '$_POST[email]', '$_POST[Username]', '$_POST[password]');");
           ?>
      <script type="text/javascript">
         alert("Registration successful");
      </script>
      <?php
         }
         else
         {
         
           ?>
      <script type="text/javascript">
         // alert("The username already exist.");
      </script>
      <?php
         }
         }
         ?>
      <?php
         if(isset($_POST['submit']))
         {
           $count=0;
           $res=mysqli_query($db,"SELECT * FROM `student` WHERE Username='$_POST[Username]' && password='$_POST[password]';");
           $row= mysqli_fetch_assoc($res);
           $count=mysqli_num_rows($res);
           if($count==0)
           {
         	?>
      <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
         <strong>The username and password doesn't match</strong>
      </div>
      <?php
         }
         else
         {
         $_SESSION['login_user'] = $_POST['Username'];
         $_SESSION['pic']= $row['pic'];
         ?>
      <script type="text/javascript">
         window.location="return1.php"          
      </script>
      <?php
         }
         }
         ?>
   </body>
</html>