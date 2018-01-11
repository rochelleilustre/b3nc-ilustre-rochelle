<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maxiumum-scale=1.0">
	<meta http-equiv="X-UA-compatible" content="IE=edge">

	<title>PHP Programming - Expressions, Control Statements, and Loops</title>
</head>
<body>

	<?php

	// Logical Operators--------------------------

	// AND => &&, OR => ||, XOR, NOT => !

	// $a = 1;
	// $b = 0;

	// echo ($a AND $b) . '<br>'; //NULL

	// echo ($a OR $b) . '<br>'; //1
	// echo ($a XOR $b) . '<br>'; //1
	// echo (!$a) . '<br>'; //NULL

	// truth table

	// a 		b 		AND  	OR 		XOR
	// true 	true 	true 

	// $a AND $b => false

	// $a = 1;
	// $b = 1;

	// $a AND $b => false


	// BMI CALCULATOR--------------------------

	//bmi = mass (kg) / height * height (m);

	// result:
	// 	< 16 		-> Severe thiness
	// 	16 - 17 	-> Moderate thinness
	// 	17 - 18.5 	-> Mild thinness
	// 	18.5 - 25 	-> Normal
	// 	25 - 30 	-> Overweight
	// 	30 - 35		-> Obese class 1
	// 	35 - 40 	-> Obese class 2
	// 	> 40 		-> Obese class 3

	// $mass = 65; //kg
	// $height = 1.6; //m

	// $bmi = $mass / ($height * $height);

	// echo 'Your BMI is ' . $bmi . '<br>';


	// if ($bmi < 16)
	// 	echo 'Result: Severe thiness';
	// else if ($bmi >= 16 AND $bmi <=17)
	// 	echo 'Result: Moderate thinness';
	// else if ($bmi > 17 AND $bmi <= 18.5)
	// 	echo 'Result: Mild thinness';
	// else if ($bmi > 18.5 AND $bmi <= 25)
	// 	echo 'Result: Normal';
	// else if ($bmi > 25 AND $bmi <= 30)
	// 	echo 'Result: Overweight';
	// else if ($bmi > 30 AND $bmi <= 35)
	// 	echo 'Result: Obese class 1';
	// else if ($bmi > 35 AND $bmi <= 40)
	// 	echo 'Result: Obese class 2';
	// else
	// 	echo 'Result: Obese class 3';

	// swich ($bmi) {
	// 	case $bmi < 16:
	// 		echo 'Result: Severe thiness';
	// 		break;
	// 	case $bmi >= 16 AND $bmi <=17:
	// 		echo 'Result: Moderate thinness';
	// 		break;
	// 	case $bmi > 17 AND $bmi <= 18.5:
	// 		echo 'Result: Mild thinness';
	// 		break;
	// 	case $bmi > 18.5 AND $bmi <= 25:
	// 		echo 'Result: Normal';
	// 		break;
	// 	case $bmi > 25 AND $bmi <= 30:
	// 		echo 'Result: Overweight';
	// 		break;
	// 	case $bmi > 30 AND $bmi <= 35:
	// 		echo 'Result: Obese class 1';
	// 		break;
	// 	case $bmi > 35 AND $bmi <= 40:
	// 		echo 'Result: Obese class 2';
	// 		break;
	// 	case $bmi > 40:
	// 		echo 'Result: Obese class 3';
	// 		break;	
	// 	default:
	// 		break;	
	// }


	//LOOPS------------

	// $number = 1;

	// while ($number <= 10) {
	// 	echo $number . ' ';
	// 	$number = $number + 1; //increment/step
	// }

	//DO..WHILE LOOP------------

	// $count = 0;
	// do {
	// 	echo $count . ' ';
	// 	//$count += 1; //increment
	// 	//$count ++; //shorthand increment
	// 	$count = $count + 2;
	// } while ($count <= 12);

	//FOR LOOPS------------

	$name = 'Juan Dela Cruz';

	for ($counter = 1; $counter <= 10; $count += 1) {
	//(initialization; condition; increment/step)
		echo $name . '<br>';
	}

	?>

</body>
</html>