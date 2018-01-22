<?php

$userName = htmlspecialchars($_POST['username']);
$passWord = htmlspecialchars($_POST['password']);
//$confirmPassword = htmlspecialchars($POST['confirmPassword']);

//echo $userName . ' ' . $passWord . ' ' . $confirmPassword;

//require 'assets/users.php';

//var_dump($users);
//array_push($users, ["username" => $userName, "password" => $passWord]);
//var_export($users);

//import json file
$file = file_get_contents('assets/users.json');

//convert to assiciative array for PHP access
$users = json_decode($file, true);

//add item to array
array_push($users, array("username" => $userName, "password" => $passWord));

var_export($users);

//open the writable file to be updated
$file = fopen('assets/users.json', 'w');

//update the users.json file
fwrite($file, json_encode($users, JSON_PRETTY_PRINT)); //over write

//close the file
fclose($file);

//reroute to login.php
header('location: login.php');