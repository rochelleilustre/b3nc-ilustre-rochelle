<?php

session_start();

require 'connect.php'; //database connection

$email = $_POST['email'];
$password = sha1($_POST['password']);

