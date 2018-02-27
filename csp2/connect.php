<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'csp2';

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if ($conn) 
	echo 'Connected to database';
else
	die('Connection failed: ' . mysqli_error($conn));