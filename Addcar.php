<?php 
include "header1.php";
?>
<?php
include "head.php";
?>
<html>
<meta charset="UTF-8">
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	left:400px;
}
</style>
<body>
<center>
<h1>เพิ่มรถยนต์</h1><br>
</center>
<div class="col-md-6">
  <form action="" method="POST">

    <label for="carid">รหัสรถยนต์</label>
    <input type="text" id="carid" name="carid" placeholder="รหัสรถ" class="form-control">

    <label for="brand">รุ่น</label>
    <input type="text" id="brand" name="brand" placeholder="brand" class="form-control">

    <label for="size">ขนาด</label>
    <select id="size" name="size" class="form-control">
      <option>S</option>
      <option>M</option>
      <option>L</option>
    </select>
  
    <input type="submit" value="ตกลง" name="submit_updatecar">
<?php
session_start();
$Car_ID = "";
$Car_Model = "";
$Car_Size = "";

$db = mysqli_connect('localhost', 'root', '', 'id3534259_test');

if (isset($_POST['submit_updatecar'])) {
	$Car_ID = mysqli_real_escape_string($db, $_POST['carid']);
    $Car_Model = mysqli_real_escape_string($db, $_POST['brand']);
    $Car_Size = mysqli_real_escape_string($db, $_POST['size']);
    
	$query = "INSERT INTO car (Car_id, Car_Model, Car_Size) 
				VALUES('$Car_ID', '$Car_Model', '$Car_Size')";
	mysqli_query($db, $query);

	echo "<script>window.location.href = 'menuAD.php';</script>";
	}
?>
</form>
</div>
</body>
</html>