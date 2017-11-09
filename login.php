<?php 
include "header.php";
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
body{background-size: 1536px 900px;background-repeat: no-repeat;}
label{color:white;}
#h{color:white;}
.main {
    width: 27%;
    float: right;
    padding: 15px;
   
}
}
</style>
<html>
<?php
include "head.php";
?>

<body background="images/bg.jpg">
<div class="main">
<form action="" method="POST">
  <h3 id="h">Welcome to NP CARCARE</h3><br><br>
  <label for="fname">Username:</label>
  <input type="text" class="form-control" id="user" name="username" placeholder="Username">
  <br><br>
  <label for="lname">Password</label>
  <input type="password" class="form-control" id="pass" name="password" placeholder="Password">
  <br><br>
  <input type="submit" value="Log In"  name="loginbutton" class="login"/>
  <br><br>
  <a class="btn btn-warning" id="button" href="register.php" role="button">Register</a>
  </form>

<?php
  if (isset($_POST["loginbutton"]))
  {
	  $query = mysqli_query($conn,"SELECT * FROM customer WHERE Cus_User='".$_POST["username"]."' and Cus_Pass='".$_POST["password"]."'");
        if($objResult = mysqli_fetch_array($query)){
          $_SESSION["Cus_User"]=$objResult['Cus_User'];
          $_SESSION["Cus_Pass"]=$objResult['Cus_Pass'];
          $_SESSION["Cus_Fname"]=$objResult['Cus_Fname'];
          $_SESSION["Cus_Lname"]=$objResult['Cus_Lname'];
          $_SESSION["Cus_Tel"]=$objResult['Cus_Tel'];
          $_SESSION["Cus_Address"]=$objResult['Cus_Address'];
          $_SESSION["Cus_Email"]=$objResult['Cus_Email'];
           echo "<script type='text/javascript'>window.location.href = 'menu.php';</script>";            
	    }
	    else
        {
            alert("ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง");
        }
    }
    
?>
</div>
</body>
</html>