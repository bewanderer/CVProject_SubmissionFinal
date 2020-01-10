<?php

include_once 'databaseconnect.php';

$email = $_POST['email'];
$nickname = $_POST['nickname'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO observers (email, username, password, nickname) VALUES ('$email', '$username', '$password', '$nickname')";
mysqli_query($conn, $sql);
echo ", insertion successful";
	
?>