<?php 
include "header1.php";
include "connectdb.php"; 
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
div{
    margin-top:30px;
}
</style>
<html>
<meta charset="utf-8">
<?php
include "head.php";
?>

<body>
<div class="container text-center col-lg-4 col-lg-offset-4">
<form action="" method="POST">
  <h3 id="h">Welcome to NP CARCARE</h3><br><br>
  <label for="fname">Username:</label>
  <input type="text" class="form-control input-lg" id="user" name="username" placeholder="Username">
  <br><br>
  <label for="lname">Password</label>
  <input type="password" class="form-control input-lg" id="pass" name="password" placeholder="Password">
  <br><br>
  <input type="submit" value="Log In"  name="loginbutton" class="login" id="button"/>
  <br><br>
  <a class="btn btn-warning" id="button" href="register.php" role="button">Register</a>
  </form>

<?php 
if(isset($_POST['loginbutton']))
{
$lg_username = $_POST['username'];
  
$lg_password = $_POST['password'];
 
  
}
if(isset($_POST['username']) && isset($_POST['password']))
{
$query = mysqli_query($conn,"select * from customer where Cus_User = '$lg_username'  and Cus_Pass = '$lg_password';");
$objResult = mysqli_fetch_array($query);
if($objResult)
{
  echo "<script>window.location.href = 'menu.php?id=".$objResult['Cus_User']."&status=".$objResult['Cus_Status']."';</script>";
}else{
   ?> 
          <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4"><center><div class="alert alert-danger">   
    <strong>ผิดพลาด!</strong> ชื่อหรือรหัสผ่านไม่ถูกต้อง
  </center></div>
  <div class="col-sm-4"></div>
</div>
   <?php  
}
}
?>

</div>
</body>
</html>