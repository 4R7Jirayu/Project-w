<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "test";
$conn = new mysqli(
	$server,
	$user,
	$pass,
	$db_name
	);
	mysqli_set_charset($conn,'utf8');
?>