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
<div class="col-md-6 col-md-offset-3" >
    <div class="text-center">
<h1>REGISTER</h1><br>
<h4>PERSONAL DATA</h4><br>

<form >

<div >
<input type="text" class="form-control" placeholder="Name" name="name" required />
<br>
<input type="text" id="i" class="form-control" 	placeholder="SSN" name="ssn" required />
<br>

<input type="text" id="i" class="form-control" placeholder="Address" name="address" required />
<br>

<input type="text" id="i" class="form-control" placeholder="Tel" name="tel" required />
<br>

<input type="text" id="i" class="form-control" placeholder="E-mail" name="email" required />
<br>

<input type="text" id="i" class="form-control" placeholder="Password" name="pass" required />
<br>
<input type="text" id="i" class="form-control" placeholder="Confirm Password" name="conpass" required />
<br><br>
<a class="btn btn-warning" id="button" href="menu.php" role="button">Register</a>
</div>
</div>
</div>

</form>
</div>
</body>
</html>
