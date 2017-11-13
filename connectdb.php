<?php
$server = "localhost";
$user = "root";
$pass = "";
$db_name = "id3534259_test";
$conn = new mysqli(
	$server,
	$user,
	$pass,
	$db_name
	);
	mysqli_set_charset($conn,'utf8');
	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>