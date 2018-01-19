<?php

session_start();

// $users = [
// 	['username' => 'admin', 'password' => 'abc123'],
// 	['username' => 'chellie', 'password' => 'ABC*()'],
// 	['username' => 'user1', 'password' => 'abc123ABC*()']
// ];

//require 'assets/users.php';
$file = file_get_contents('assets/users.json');
$users = json_decode($file, true);

$isLoginSuccessful = false; // monitor Login status

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);

// echo $userName;
// echo $passWord;

foreach ($users as $user) {
	// echo $user['username'] . '<br>';
	// echo $user['password'] . '<br>';

	// if($user['username'] == $userName){
	// 	if($user['password'] == $passWord){

	if($user['username'] == $userName && $user['password'] == $passWord){
			// echo $userName . 'was found';
			// echo 'Password is correct.';
			//header('location: home.php'); //will reroute to home.php
			$isLoginSuccessful = true;
			// $_SESSION['role'] = $user['role']; //get role of current user
			break;
	} 

}


if ($isLoginSuccessful)	{
	//session_start();
	$_SESSION['current_user'] = $userName;
	
	header('location: home.php'); //successful login
}
else {
	
	header('location: login.php'); //failed login
}

if (isset($_SESSION['current_user']) && $isLoginSuccessful)
	$_SESSION['message'] = 'Login was successful.';
else 
	$_SESSION['message'] = 'Login was unsuccessful.';




