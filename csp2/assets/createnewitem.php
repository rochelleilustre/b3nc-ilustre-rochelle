<?php

require '../connect.php';

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_volume = $_POST['product_volume'];
$product_cat = $_POST['product_cat'];
$product_brand = $_POST['product_brand'];
$product_availability = $_POST['product_availability'];
$product_packaging = $_POST['product_packaging'];
$product_image = $_FILES['product_image']['name'];
$product_image_tmp = $_FILES['product_image']['tmp_name'];

move_uploaded_file($product_image_tmp, "assets/images/$product_image");

echo $sql = "INSERT INTO product(product_name, price, volume_id, categories_id, brand_id, stocks_id, packaging_id, image) VALUES ('$product_name', '$product_price', '$product_volume', '$product_cat', '$product_brand', '$product_availability', '$product_packaging', '$product_image')";

$result = mysqli_query($conn, $sql);

if ($result)
	header('location: ../catalog.php');
else
	die ('Error: ' . $sql . '<br>' . mysqli_error($conn));

mysqli_close($conn);

