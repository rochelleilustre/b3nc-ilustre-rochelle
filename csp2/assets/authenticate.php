<?php

session_start();

require '../connect.php'; //database connection

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT username, password FROM users";

$result = mysqli_query ($conn, $sql);

$isLogInSuccessful = false;

if (mysqli_num_rows($result) > 0) {
	$user = mysqli_fetch_assoc($result);

	if ($username == $user['username'] && $password == $user['password']) {
		$isLogInSuccessful = true;
		$_SESSION['current_user'] = $user['username'];

	}
}

if ($isLogInSuccessful) {
	header('location: index.php');
} else {
	header('location: ../login.php');
}