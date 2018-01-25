<?php

$name = $_POST['name'];
$description = $_POST['description'];
$image = $_POST['image'];
$price = $_POST['price'];

//echo $userName. ' ' . $passWord . ' ' . $email;

$file = file_get_contents('items.json');
$items = json_decode($file, true);

$newProduct = array(
	'name' => $name, 
	'description' => $description, 
	'image' => 'assets/img'. $image, 
	'price' => '$price'
);

array_push($items, $newProduct);

$jsonFile = fopen('items.json', 'w');

fwrite($jsonFile, json_encode($items, JSON_PRETTY_PRINT));

fclose($jsonFile);

header('location: ../create_new_item.php');