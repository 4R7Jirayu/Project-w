<html>
<?php include "header.php";?>
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
<center>
<h1>REGISTER</h1><br>
<h4>PERSONAL DATA</h4><br>
<div>
<form>
<input type="text" class="form-control" placeholder="Name" name="name" required /><br><br>
<input type="text" class="form-control" placeholder="SSN" name="ssn" required /><br><br>
<input type="text" class="form-control" placeholder="Address" name="address" required /><br><br>
<input type="text" class="form-control" placeholder="Tel" name="tel" required /><br><br>
<input type="text" class="form-control" placeholder="E-mail" name="email" required /><br><br>
<input type="text" class="form-control" placeholder="Password" name="pass" required /><br><br>
<input type="text" class="form-control" placeholder="Confirm Password" name="conpass" required /><br><br>
<a class="btn btn-warning" id="button" href="menu.php" role="button">Register</a>
</form>
</div>
</body>
</html>
