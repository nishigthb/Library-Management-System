<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" id="container">  
  <div class="form-container sign-in-container">
    <form action="#" method="post">
    <h1>Sign in </h1>
      <input type="text" placeholder="Username" name="Username"/>
        <input type="password" placeholder="Password" name="password"/>
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
    </div>
  </div>
    <div class="overlay-container">
    <div class="overlay">

  <div class="overlay-panel overlay-right">
                  <h1>Hello, Admin!</h1>
                  <p> <br><br>Enter your details and start journey with us</p>
                  
               </div>
</div>

<script src="main.js" type="text/javascript"></script>
<?php
      if(isset($_POST['submit']))
      {
        $count=0;
        $sql="SELECT Username from `librarian`";
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
          mysqli_query($db,"INSERT INTO `LIBRARIAN` VALUES('$_POST[Username]', '$_POST[password]');");
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
              alert("The username already exist.");
            </script>
          <?php
        }
      }
    ?>
  <?php
if(isset($_POST['submit']))
{
  $count=0;
  $res=mysqli_query($db,"SELECT * FROM `librarian` WHERE Username='$_POST[Username]' && password='$_POST[password]';");
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
    window.location="add.php"
    </script>
  <?php
  }
}
?>
</body>
</html>