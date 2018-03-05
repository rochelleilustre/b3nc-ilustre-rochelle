<?php

require '../connect.php';

$id = $_GET['item_id'];

$sql = "SELECT * FROM product WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
extract($row);

echo $product_name;