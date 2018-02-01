<?php

session_start();

$id = $_POST['item_id'];
$quantity = $_POST['item_quantity'];

//echo $id . ' ' . $quantity;

if (isset($_SESSION['cart'][$id])){
	$_SESSION['cart'][$id] += $quantity;
} else {
	//update the items for session cart variable
	$_SESSION['cart'][$id] = $quantity;
}


//udpate the total quantities of item to be purchased
// long hand
//$_SESSION['item_count'] = $_SESSION['item_count'] + $quantity;
//$_SESSION['item_count'] += $quantity;

$_SESSION['item_count'] = array_sum($_SESSION['cart']);

echo '<strong style="color:red;">('.$_SESSION['item_count'].')</strong>';
