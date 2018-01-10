<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="IE=edge">

	<title>PHP programming - Expressions </title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>

	<?php

	// Assignment----------------

	// $companyName = "";

	// $companyName = "Tuitt Coding Bootcamp";

	// echo $companyName;

	// $counter = 0;

	// echo $counter;
	// echo "<br>";

	// // $counter = $counter + 150;

	// $counter += 230; //shorthand

	// echo $counter;

	// Arithmetic Operator----------------

	// $counter = 15;
	// echo $counter . "<br>";

	// //$counter = $counter + 5;
	// $counter += 5;

	// echo $counter . "<br>";

	// //$counter = $counter - 3;
	// $counter -= 3;
	// echo $counter . "<br>";

	// //$counter = $counter * 8;
	// $counter *= 8;
	// echo $counter . "<br>";

	// //$counter = $counter / 16;
	// $counter /= 16;
	// echo $counter;

	// $row = 12;

	// //$counter = $counter . $row;
	// $counter .= $row;

	// echo $counter . "<br>" ;

	// //$counter = $counter % 4;
	// $counter %= 4;
	// echo $counter . "<br>";

	// BEDMAS or PENDAS----------------
	// Braces/Parenthesis, Division/Multiplication, Addition/Subtraction

	// echo 1 + 5 * 3 ;
	// echo "<br>";
	// echo (1 + 5) * 3;

	// $bankBalance = 99;
	// $deposit = 1000;

	// if ($bankBalance < 100){ //true
	// 	$bankBalance = $bankBalance + $deposit;
	// 	echo "Your balance is now updated.<br>";
	// }else { //false
	// 	echo "Current balance: " . $bankBalance . "<br>";
	// 	echo "Your bank balance is less than or equal to 100.";
	// }
	// echo "<br>" . $bankBalance;

	// RELATIONAL OPERATORS----------------

	// $userName = "juandelacruz@yahoo.com";
	// $passWord = "";

	// $userName = "admin";

	// == value 
	//=== value + type 

	// if ($userName === "admin") {
	// 	echo "Username: ADMIN";
	// } else {
	// 	echo "Username: " . $userName;
	// }

	$firstNumber = 1;
	$secondNumber = 1;

	if ($firstNumber > $secondNumber) {
		echo $firstNumber . " is greater than " . $secondNumber . "<br>";
	}

	if ($firstNumber < $secondNumber) {
		echo $firstNumber . " is less than " . $secondNumber . "<br>";
	}

	if ($firstNumber >= $secondNumber) {
		echo $firstNumber . " is greater than or equal to " . $secondNumber . "<br>";
	}

	if ($firstNumber <= $secondNumber) {
		echo $firstNumber . " is less than or equal to " . $secondNumber . "<br>";
	}

	?>

</body>
</html>