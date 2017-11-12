<html>
<?php include "header1.php";?>
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
</style>
<?php include "head.php";?>
<body>
<div class="col-md-6 col-md-offset-3" >
    <div class="text-center">
<h1>REGISTER</h1><br>
<h4>PERSONAL DATA</h4><br>

<form method="POST" action="">
<div >
<input type="text" class="form-control" placeholder="Username" name="username" required />
<br>
<input type="text" class="form-control" placeholder="First Name" name="fname" required />
<br>
<input type="text" id="i" class="form-control" 	placeholder="Last name" name="lname" required />
<br>

<input type="text" id="i" class="form-control" placeholder="Address" name="address" required />
<br>

<input type="text" id="i" class="form-control" placeholder="Tel" name="tel" required />
<br>

<input type="text" id="i" class="form-control" placeholder="E-mail" name="email" required />
<br>

<input type="text" id="i" class="form-control" placeholder="Car Model" name="model" required />
<br>

<input type="text" id="i" class="form-control" placeholder="Password" name="password" required />
<<<<<<< HEAD
<br>
<br>
<input type="submit" value="Register"  name="reg_user" class="register" id="button"/>
=======
<br><br>
<input type="submit" value="Register" class="btn btn-success" name="reg_user" class="register"/>
>>>>>>> 369faf69378967c9b8349a138c0c900237df8dea
</div>
</div>
</div>

<?php
session_start();

$username = "";
$email    = "";
$fname = "";
$lname = "";
$tel = "";
$address = "";
$password = "";
$model = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'id3534259_test');

// REGISTER USER
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$fname = mysqli_real_escape_string($db, $_POST['fname']);
	$lname = mysqli_real_escape_string($db, $_POST['lname']);
	$tel = mysqli_real_escape_string($db, $_POST['tel']);
	$address = mysqli_real_escape_string($db, $_POST['address']);
	$model = mysqli_real_escape_string($db, $_POST['model']);

	$query = "INSERT INTO customer (Cus_User, Cus_Email, Cus_Pass, Cus_Fname, Cus_Lname, Cus_Tel, Cus_Address, Cus_Status, Cus_Model) 
				VALUES('$username', '$email', '$password', '$fname', '$lname', '$tel', '$address', 'user','$model')";
	mysqli_query($db, $query);

	$_SESSION['Cus_User'] = $username;
	header('location: login.php');
	}

?>
</form>
</div>
</body>
</html>
