<html>
<?php include "header1.php";
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
</style>

<?php include "head.php";
session_start();
?>


<body>
<div class="col-md-6 col-md-offset-3" >
    <div class="text-center">
<h1>REGISTER</h1><br>
<h4>PERSONAL DATA</h4><br>

<form method="POST" action="">
<div >
<input type="text" id="username" class="form-control" placeholder="Username" name="username" required />
<br>
<input type="text" id="fname" class="form-control" placeholder="First Name" name="fname" required />
<br>
<input type="text" id="lname" class="form-control" 	placeholder="Last name" name="lname" required />
<br>

<input type="text" id="address" class="form-control" placeholder="Address" name="address" required />
<br>

<input type="text" id="tel" class="form-control" placeholder="Tel" name="tel" required />
<br>

<input type="text" id="email" class="form-control" placeholder="E-mail" name="email" required />
<br>

<input type="text" id="plate" class="form-control" placeholder="License Plate" name="plate" required />
<br>

<input type="password" id="password" class="form-control" placeholder="Password" name="password" required />
<br>
<select name="CarModel"class="form-control" id="CarID" required>
         <option value="0">เลือกรถ</option>
        <?php
		 $fc = mysqli_query($conn,"select * from car");
		 
         while($row = mysqli_fetch_array($fc)){

			
			 echo "<option  value=".$row['Car_id'].">".$row['Car_Model']."</option>";
			
         }
         ?>
</select>
<br>
<br>
<input type="submit" value="Register"  name="reg_user" class="register" id="button"/>
</div>
</div>
</div>

<?php


// connect to database


// REGISTER USER


	

?>
</form>
</div>
</body>


<script>
 $(document).ready(function(){

$('#button').on('click',function(){
	var username = $('#username').val();
	var email = $('#email').val();
	var password = $('#password').val();
	var fname = $('#fname').val();
	var lname = $('#lname').val();
	var tel = $('#tel').val();
	var address = $('#address').val();
	var model = $('#CarID').val();
	var plate = $('#plate').val();
	
	if(username !=''){
		
		$.ajax({
			type: "POST",
			url: "updateCar.php",
			data: {
				'TxtUsername' : username,
				'Txtemail' : email,
				'Txtpassword' : password,
				'TxtFname' : fname,
				'TxtLname' : lname,
				'TxtTel' : tel,
				'TxtAddress' : address,
				'TxtCarModel' : model,
				'TxtPlate' : plate
			},
		   success: function(data){
			   
			
			window.location.href="index.php";
		   }
		});
		return false;
	}else{
		alert('กรุณากรอกข้อมูล');
		return false;
	}
});
 });

 
</script>


</html>
