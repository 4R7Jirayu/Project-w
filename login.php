<?php 
include "header.php";
?>
<style>
#button{
	background-color: #FF6600;
	border: none;
	color: white;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	cursor: pointer;
	padding: 10px 60px;
	font-size:16px;
	margin: 4px 2px;
	width:250px;
}
body{background-size: 1536px 900px;background-repeat: no-repeat;}
label{color:white;}
#h{color:white;}
</style>
<html>
<?php
include "head.php";
?>

<body background="images/bg.jpg">
<div class="main">
<form action="/action_page.php">
  <h3 id="h">Welcome to NP CARCARE</h3><br><br>
  <label for="fname">Username:</label>
  <input type="text" class="form-control" id="fname" name="firstname" placeholder="Username">
  <br><br>
  <label for="lname">Password</label>
  <input type="password" class="form-control" id="lname" name="lastname" placeholder="Password">
  <br><br>
  <a class="btn btn-warning"  id="button" href="menu.php" role="button" width=250px>Login</a>
  <br><br>
  <a class="btn btn-warning" id="button" href="register.php" role="button">Register</a>
  </form>
</div>

</body>


<style>

 .main {
    width: 27%;
    float: right;
    padding: 15px;
   
}
}
</style>