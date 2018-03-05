<?php

session_start();

require '../connect.php'; //database connection

$username = $_POST['username'];
$password = sha1($_POST['password']);

$sql = "SELECT username, password FROM customer WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

$isLogInSuccessful = false;

if (mysqli_num_rows($result) > 0) {
	$customer = mysqli_fetch_assoc($result);

	if ($username == $customer['username'] && $password == $customer['password']) {
		$isLogInSuccessful = true;
		$_SESSION['current_user'] = $customer['username'];

	}
}

if ($isLogInSuccessful) {
	header('location: ../home.php');
} else {
	header('location: ../login.php');
}