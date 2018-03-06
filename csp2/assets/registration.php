<?php

require '../connect.php';

$username = $_POST['username'];
$password = sha1($_POST['password']);
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$image = $_POST['image'];
$role = 'customer';

$sql = "INSERT INTO customers (username, password, email, first_name, last_name, address, contact, image) VALUES ('$username', '$password', '$email', '$first_name', '$last_name', '$address', '$contact', '$image')";

$result = mysqli_query($conn, $sql);

if ($result)
	header('location: ../login.php');
else
	die ('Error: ' . $sql . '<br>' . mysqli_error($conn));

mysqli_close($conn);