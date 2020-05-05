<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
<!-- <link rel="stylesheet" type="text/css" href="style2.css">-->
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type ="text/css">
li a
{
  color: white;
  text-decoration: none;
}
nav
{
  float:right;
  word-spacing:10px;
  padding: 10px;
}
nav li 
{
  display: inline-block;
  line-height:80px;
}
</style>
</head>
<body>

	   <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header"> </div> 
          <ul class="nav navbar-nav">
  <!--            <li><a href="index1.php">HOME  </a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
-->
          </ul>
          
          <?php
            if(isset($_SESSION['login_user']))
            {?>
            <ul class="nav navbar-nav navbar-right">
               <a href="">                
              <div style="color:white"> 
                <?php
                echo "WELCOME ".$_SESSION['login_user'];
                ?>
              </div>
              </a>
                <a href="logout.php"><span class="glyphicon glyphicon-log-out">LOGOUT </span></a>
            </ul>
<?php
}
else
{
   ?>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index1.php"><span class="glyphicon glyphicon"> HOME</span></a></li>             
                <li><a href="studentlogin.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>             

              </ul>
                <?php
}
?>
</div> 
</nav>
</body>
</html>